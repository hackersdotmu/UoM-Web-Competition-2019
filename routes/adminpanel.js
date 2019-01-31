var express = require('express');
var router = express.Router();
var dotenv = require('dotenv').config();
var config = require('../config');
var ObjectID = require('mongodb').ObjectID;

router.get('/', function(req, res) {
    if (req.session.user.admin == true) {
        if (req.query.message) {
            message = {};
            message.msg = req.query.message;
            if (req.query.message.startsWith('S.')) {
                message.msg = req.query.message.slice(2);
                message.type = 'Success';
            } else {
                message.type = 'Danger'
            }
        } else {
            message = "";
        }
        res.render('adminpanel/index', {
            title: 'Webcup',
            message: message,
            session: req.session,
        });
    } else {
        res.redirect('/');
    }
});

router.get('/manage-users', function(req, res) {
    if (req.session.user.admin == true) {
        if (req.query.message) {
            message = {};
            message.msg = req.query.message;
            if (req.query.message.startsWith('S.')) {
                message.msg = req.query.message.slice(2);
                message.type = 'Success';
            } else {
                message.type = 'Danger'
            }
        } else {
            message = "";
        }
        if (req.query.keyword) {
            keyword = req.query.keyword.trim();
            config.db.users.find({
                    $or: [{
                            "uname": {
                                $regex: keyword
                            }
                        },
                        {
                            "first_name": {
                                $regex: keyword
                            }
                        },
                        {
                            "last_name": {
                                $regex: keyword
                            }
                        },
                        {
                            "email": {
                                $regex: keyword
                            }
                        }
                    ]
                },
                function(err, users) {
                    if (err) {
                        console.log(err);
                    } else {
                        res.render('adminpanel/manage-users', {
                            title: 'Webcup',
                            users: users,
                            session: req.session,
                            message: message,
                            keyword: keyword,
                        });
                    };
                });

        } else {
            config.db.users.find({}, (err, users) => {
                res.render('adminpanel/manage-users', {
                    title: 'Webcup',
                    users: users,
                    keyword: '',
                    session: req.session,
                });
            })
        }
    } else {
        res.redirect('/');
    }
});

router.get('/manage-questions', function(req, res) {
    if (req.session.user.admin == true) {
        if (req.query.message) {
            message = {};
            message.msg = req.query.message;
            if (req.query.message.startsWith('S.')) {
                message.msg = req.query.message.slice(2);
                message.type = 'Success';
            } else {
                message.type = 'Danger'
            }
        } else {
            message = "";
        }

        if (req.query.keyword) {
            keyword = req.query.keyword.trim();
            if (keyword == 'ad_min') {
                query = {
                    reports: {
                        $gte: 8
                    }
                };
            } else {
                query = {
                    $or: [{
                            "_id": {
                                $regex: keyword
                            }
                        },
                        {
                            "title": {
                                $regex: keyword
                            }
                        },
                        {
                            "content": {
                                $regex: keyword
                            }
                        },
                        {
                            "time": {
                                $regex: keyword
                            }
                        }
                    ]
                }
            }
            config.db.questions.find(query,
                function(err, questions) {
                    if (err) {
                        console.log(err);
                    } else {
                        res.render('adminpanel/manage-questions', {
                            title: 'Webcup',
                            questions: questions,
                            session: req.session,
                            message: message,
                            keyword: keyword,
                        });
                    };
                });
        } else {
            config.db.questions.find({}, (err, questions) => {
                if (err) {
                    res.send(err)
                } else {
                    res.render('adminpanel/manage-questions', {
                        title: 'Webcup',
                        session: req.session,
                        keyword: '',
                        questions: questions,
                        message: message,
                    });
                }
            })
        }

    } else {
        res.redirect('/');
    }
});
router.get('/updates', function(req, res) {
    if (req.session.user.admin == true) {
        if (req.query.type && req.query.params && req.query.target) {
            if (req.query.keyword) {
                keyword = req.query.keyword;
            } else {
                keyword = '';
            }
            if (req.query.type == 'userban') {
                if (req.query.params == 'true') {
                    ban = true;
                } else {
                    ban = false;
                }
                config.db.users.update({
                    uname: req.query.target
                }, {
                    $set: {
                        ban: ban
                    }
                }, function(err, user_details) {
                    res.redirect(config.domain + "/adminpanel/manage-users/?message=" + encodeURIComponent("S.Successfully changed ban status.") + '&keyword=' + encodeURIComponent(keyword));
                });
            } else if (req.query.type == 'useradmin') {
                if (req.query.params == 'true') {
                    admin = true;

                    config.db.users.update({
                        uname: req.query.target
                    }, {
                        $set: {
                            admin: admin
                        }
                    }, function(err, user_details) {
                        res.redirect(config.domain + "/adminpanel/manage-users/?message=" + encodeURIComponent("S.Successfully changed admin permission.") + '&keyword=' + encodeURIComponent(keyword));
                    });
                } else {
                    res.redirect(config.domain + "/adminpanel/manage-users/?message=" + encodeURIComponent("D.Invalid action!") + '&keyword=' + encodeURIComponent(keyword));
                }
            } else if (req.query.type == 'questionban') {
                if (req.query.params == 'false') {
                    visible = true;
                    reports = -1;
                } else {
                    visible = false;
                    reports = 0;
                }

                console.log(req.query.target.toString()); //Note: Problem is here cant change visible
                config.db.questions.update({
                    "_id": ObjectID(req.query.target.toString())
                }, {
                    $set: {
                        visible: visible,
                        reports: reports
                    }
                }, function(err, questions) {
                    res.redirect(config.domain + "/adminpanel/manage-questions/?message=" + encodeURIComponent("S.Successfully changed question ban status.") + '&keyword=' + encodeURIComponent(keyword));
                });

            } else {
                res.redirect("/adminpanel/manage-questions/?message=" + encodeURIComponent("D.Invalid action"));
            }
        } else {
            res.redirect("/adminpanel");
        }
    } else {
        res.redirect('/');
    }
});




module.exports = router;