var express = require('express');
var config = require('../config')
var router = express.Router();
var config = require('../config')
var session = require('express-session');
var db = require('../config').db;

/* GET home page. */
router.get('/', function(req, res) {
    var interests = []
    if (req.session.user) {
        db.users.findOne({
            uname: req.session.user.uname
        }, (err, user) => {
            if (err) {
                res.send(err)
            } else {
                var interests = [...user.interests, ...user.courses]
                db.questions.find({
                    user: req.session.user.uname
                }, (err, myquestions) => {
                    if (err) {
                        res.send(err)
                    } else {
                        if (req.query.search) {
                            //string = (/(req.query.search)/i);
                            //console.log(string);
                            db.questions.find({
                                    $or: [{
                                            "title": {
                                                "$regex": req.query.search,
                                                "$options": "i"

                                            }
                                        },
                                        {
                                            "tags": {
                                                "$regex": req.query.search,
                                                "$options": "i"
                                            }
                                        },
                                    ]
                                },
                                (err, questions) => {
                                    if (err) {
                                        res.send(err)
                                    } else {
                                        notify = false;
                                        myquestions.forEach(function(question) {
                                            if (question.notify) {
                                                if (question.notify == true) {
                                                    notify = true;
                                                }
                                            }
                                        });
                                        res.render('home-authed', {
                                            title: 'Webcup',
                                            domain: config.domain,
                                            session: req.session,
                                            questions: [...questions],
                                            myquestions: myquestions,
                                            captcha: config.captcha,
                                            notify: notify
                                        });
                                    }
                                })
                        } else {
                            var interests = [...user.interests, ...user.courses, ...user.experience]
                            db.questions.find({
                                tags: {
                                    $in: interests
                                }
                            }, (err, questions) => {
                                if (err) {
                                    res.send(err)
                                } else {
                                    notify = false;
                                    myquestions.forEach(function(question) {
                                        if (question.notify) {
                                            if (question.notify == true) {
                                                notify = true;
                                            }
                                        }
                                    });

                                    res.render('home-authed', {
                                        title: 'Webcup',
                                        domain: config.domain,
                                        session: req.session,
                                        questions: [...questions],
                                        myquestions: myquestions,
                                        captcha: config.captcha,
                                        notify: notify
                                    });
                                }
                            })
                        }
                    }
                })

            }

        })
    } else {
        db.questions.find().sort({
            time: -1
        }, (err, questions) => {
            res.render('home', {
                title: 'Webcup',
                domain: config.domain,
                session: req.session
            });
        })
    }
});

module.exports = router;