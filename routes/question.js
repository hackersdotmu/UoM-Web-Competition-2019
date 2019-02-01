var express = require('express');
var config = require('../config')
var router = express.Router();
var db = config.db;
var showdown = require('showdown');
var converter = new showdown.Converter();
var mongojs = require('mongojs');
var profanity = require('profanity-util');

var parseTag = function(str) {
    var res = []
    str.split(',').forEach(element => {
        if (element.trim() != "") res.push(element.trim())
    });
    return res;
}

/* GET home page. */
router.get('/new', function(req, res) {
    if (req.session.user) {
        res.render('question/new', {
            session: req.session,
            captcha: config.captcha,
        });
    } else {
        res.redirect('/')
    }
});

router.post('/new', function(req, res) {
    if (req.body['g-recaptcha-response']) { //TODO: in depth check
        if (req.session.user) {
            if (profanity.check(req.body.title + req.body.content).length > 0) {
                res.render('question/new', {
                    session: req.session,
                    error: `Profanity Detected! Please remove: [${profanity.check(req.body.title + req.body.content)}]`
                });
            } else {

                db.questions.find({
                    user: req.session.user.uname
                }, (err, ques) => {
                    if (err) {
                        res.send(err)
                    } else {
                        if (ques.length == 0 || (Date.now() - Date.parse(ques.sort((a, b) => {
                                if (a.time < b.time) {
                                    return -1
                                } else if (a.time > b.time) {
                                    return 1
                                } else {
                                    return 0
                                }
                            })[0].time)) > 1800000) {
                            var new_question = {
                                title: req.body.title,
                                content: req.body.content,
                                user: req.session.user.uname,
                                replies: [],
                                tags: parseTag(req.body.tags),
                                time: new Date().toLocaleString(),
                                reports: [],
                                votes: [],
                                visible: true,
                                contacts: [],
                                contact_details: [],
                                notify: false
                            }
                            db.questions.insert(new_question, function(err, question) {
                                if (err) {
                                    res.send(err) //TODO: Show alert instead
                                } else {
                                    config.db.users.update({
                                        uname: req.session.user.uname
                                    }, {
                                        $inc: {
                                            posts: 1
                                        }
                                    }, function(err, user_details) {
                                        req.session.user.posts = req.session.user.posts + 1;
                                        res.redirect('/question/view/' + question._id)
                                    });
                                }
                            })
                        } else {
                            res.render('question/new', {
                                session: req.session,
                                error: `You have to wait at least 30mins before opening a new Issue.`
                            });
                        }
                    }
                })
            }
        } else {
            res.redirect('/');
        }
    } else {
        res.render('question/new', {
            session: req.session,
            error: `Invalid Captcha!`
        });
    }
});

router.post('/update/:id', (req, res) => {
    var qid = req.params.id;
    db.questions.findOne({
        _id: mongojs.ObjectID(qid)
    }, (err, question) => {
        if (err) {
            res.send(err) // TODO: Show as alert
        } else {
            if (profanity.check(req.body.title + req.body.content).length > 0) {
                res.render('question/view/' + qid, {
                    session: req.session,
                    error: `Profanity Detected! Please remove: [${profanity.check(req.body.title + req.body.content)}]`
                });
            } else {
                var question_updated = {...question,
                    content: req.body.content
                }
                db.questions.update({
                    _id: mongojs.ObjectID(qid)
                }, {
                    $set: question_updated
                }, (err, newq) => {
                    if (err) {
                        res.send(err)
                    } else {
                        res.redirect('/question/view/' + qid)
                    }
                })
            }
        }
    })
})

router.get('/view/:id', function(req, res) {
    if (req.session.user) {
        db.questions.find({
            _id: mongojs.ObjectID(req.params.id)
        }, function(err, data) {
            if (err) {
                // TODO: Send an alert instead
                res.send(err);
            } else {
                console.log(data[0])
                console.log(data[0])
                var voted = false;
                var reported = false;
                if (data[0].votes.includes(req.session.user.uname)) {
                    voted = true
                }
                if (data[0].reports.includes(req.session.user.uname)) {
                    reported = true
                }
                res.render('question/question', {
                    session: req.session,
                    question: {...data[0],
                        content: converter.makeHtml(data[0].content),
                        rawContent: data[0].content,
                        voted: voted,
                        reported: reported,
                    }
                });
            }
        })
    } else {
        res.redirect('/');
    }
});

router.post('/:qid/answer', (req, res) => {
    if (profanity.check(req.body.answer).length > 0) {
        res.render('question/new', {
            session: req.session,
            error: `Profanity Detected! Please remove: [${profanity.check(req.body.answer)}]`
        });
    } else {
        if (req.session.user) {
            db.questions.findOne({
                _id: mongojs.ObjectID(req.params.qid)
            }, (err, question) => {
                if (err) {
                    res.send(err) // TODO: Show as alert
                } else {
                    var question_updated = {...question,
                        replies: [...question.replies, {
                            answer: req.body.answer,
                            time: new Date().toLocaleString(),
                            uname: req.session.user.uname
                        }]
                    }
                    db.questions.update({
                        _id: mongojs.ObjectID(req.params.qid)
                    }, {
                        $set: question_updated
                    }, (err, newq) => {
                        if (err) {
                            res.send(err)
                        } else {
                            res.redirect('/question/view/' + req.params.qid)
                        }
                    })
                }
            })
        } else {
            res.redirect('/');
        }
    }
})

router.post('/vote/:qid', (req, res) => {
    if (req.session.user) {
        db.questions.findOne({
            _id: mongojs.ObjectID(req.params.qid)
        }, (err, question) => {
            if (err) {
                res.send(err) // TODO: Show as alert
            } else {
                var question_updated = {...question,
                }
                if (!question.votes.includes(req.session.user.uname)) {
                    question_updated = {...question_updated,
                        votes: [...question.votes, req.session.user.uname]
                    }
                    db.questions.update({
                        _id: mongojs.ObjectID(req.params.qid)
                    }, {
                        $set: question_updated
                    }, (err, newq) => {
                        if (err) {
                            res.send(err)
                        } else {
                            res.redirect('/question/view/' + req.params.qid)
                        }
                    })
                }
            }
        })
    } else {
        res.redirect('/');
    }
})
router.post('/markread/:qid', (req, res) => {
    if (req.session.user) {
        db.questions.findOne({
            _id: mongojs.ObjectID(req.params.qid)
        }, (err, question) => {
            if (err) {
                res.send(err) // TODO: Show as alert
            } else {

                db.questions.update({
                    _id: mongojs.ObjectID(req.params.qid)
                }, {
                    $set: {
                        notify: false
                    }
                }, (err, newq) => {
                    if (err) {
                        res.send(err)
                    } else {
                        res.redirect('/question/view/' + req.params.qid)
                    }
                })

            }
        })
    } else {
        res.redirect('/');
    }
})

router.post('/contact/:qid', (req, res) => {
    if (req.session.user) {
        contact = {
            uname: req.session.user.uname,
            first_name: req.session.user.first_name,
            last_name: req.session.user.last_name,
            email: req.session.user.email,
            phone: req.session.user.phone
        };
        db.questions.update({
            _id: mongojs.ObjectID(req.params.qid)
        }, {
            $push: {
                contact_details: contact,
                contacts: req.session.user.uname
            },
            $set: {
                notify: true
            }
        }, (err, newq) => {
            if (err) {
                res.send(err)
            } else {
                res.redirect('/question/view/' + req.params.qid)
            }
        })
    } else {
        res.redirect('/');
    }
})

router.get('/delete/:qid', (req, res) => {
    if (req.session.user) {
        db.questions.findOne({
            _id: mongojs.ObjectID(req.params.qid)
        }, (err, question) => {
            if (err) {
                res.send(err) // TODO: Show as alert
            } else {
                var question_updated = {...question
                }
                if (question.visible) {
                    question_updated = {...question,
                        visible: false
                    }
                    db.questions.update({
                        _id: mongojs.ObjectID(req.params.qid)
                    }, {
                        $set: question_updated
                    }, (err, newq) => {
                        if (err) {
                            res.send(err)
                        } else {
                            res.redirect('/adminpanel/manage-questions')
                        }
                    })
                }
            }
        })
    } else {
        res.redirect('/');
    }
})

router.post('/report/:qid', (req, res) => {
    if (req.session.user) {
        db.questions.findOne({
            _id: mongojs.ObjectID(req.params.qid)
        }, (err, question) => {
            if (err) {
                console.log(err)
                res.send(err) // TODO: Show as alert
            } else {
                var question_updated = {...question
                }
                if (!question.reports.includes(req.session.user.uname)) {
                    question_updated = {...question_updated,
                        reports: [...question.reports, req.session.user.uname]
                    }
                    db.questions.update({
                        _id: mongojs.ObjectID(req.params.qid)
                    }, {
                        $set: question_updated
                    }, (err, newq) => {
                        if (err) {
                            res.send(err)
                        } else {
                            res.redirect('/question/view/' + req.params.qid)
                        }
                    })
                }
            }
        })
    } else {
        res.redirect('/');
    }
})

module.exports = router;