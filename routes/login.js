var dotenv = require('dotenv').config();
var express = require('express');
var config = require('../config')
var router = express.Router();
var config = require('../config')
var session = require('express-session');
const bcrypt = require('bcryptjs');
const crypto = require('crypto');
var db = require('../config').db;
var Mailjet = require('node-mailjet').connect(process.env.CONTACT_MAIL, process.env.CONTACT_MAIL_PASS);

/* GET login page. */
router.get('/', function(req, res) {
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
    if (req.session.user) {
        res.redirect(config.domain + "/account?message=" + encodeURIComponent("Already logged in!"));
    } else {
        res.render('login', {
            title: 'Webcup',
            message: message,
            captcha: config.captcha,
            session: req.session,
        });
    };
});

router.post('/auth', function(req, res) {
    var uname = req.body.un;
    config.db.users.find({
        uname: uname
    }, function(err, user_details) {
        if (err) {
            console.log(err);
        } else {
            if (user_details[0]) {
                user_details = user_details[0];
                if (user_details.ban == false) {
                    if (bcrypt.compareSync(req.body.pw, user_details.hash)) {
                        courses = user_details.courses.join(',');
                        interests = user_details.interests.join(',');
                        user = {
                            uname: user_details.uname,
                            //pw: user_details.hash,
                            admin: user_details.admin,
                            ban: user_details.ban,
                            first_name: user_details.first_name,
                            last_name: user_details.last_name,
                            email: user_details.email,
                            phone: user_details.phone,
                            courses: courses,
                            interests: interests,
                            field: user_details.field,
                            experience: user_details.experience,
                            posts: user_details.posts,
                            comments: user_details.comments,
                            token: user_details.token,
                            verified: user_details.verified
                        };
                        req.session.user = user;
                        res.redirect('/');
                        // res.redirect(config.domain + "/account?message=" + encodeURIComponent("S.Successfully logged in!"));
                    } else {
                        res.redirect(config.domain + "/login?message=" + encodeURIComponent("Error: Incorrect username or password"));
                    }
                } else {
                    res.redirect(config.domain + "/login?message=" + encodeURIComponent("Error: Ypu account was banned")); //Incorrect password but abstraction for security purposes
                }

            } else {
                res.redirect(config.domain + "/login?message=" + encodeURIComponent("Error: Incorrect username or password"));
            };

        };
    });
});

router.post('/register', function(req, res) {
    if (req.body['g-recaptcha-response']) { //TODO: in depth check

        auth_token = crypto.createHash('md5').update(req.body.uname).digest("hex");

        let hash = bcrypt.hashSync(req.body.pw, 10);

        var courses = [];
        var interests = [];
        var fields = [];
        //Array dump interests
        if (req.body.courses.includes(',') && req.body.courses != ",") {
            temp = req.body.courses.split(',');
            for (x in temp) {
                if (temp[x].trim() != '') {
                    courses.push(temp[x].trim());
                }
            }

        } else {
            courses.push(req.body.courses);
        }
        //Array dump interests
        if (req.body.interests.includes(',') && req.body.interests != ",") {
            temp = req.body.interests.split(',');
            for (x in temp) {
                if (temp[x].trim() != '') {
                    interests.push(temp[x].trim());
                }
            }

        } else {
            interests.push(req.body.interests.trim());
        }


        new_user = {
            uname: req.body.uname,
            hash: hash,
            ban: false,
            admin: false,
            first_name: req.body.first_name,
            last_name: req.body.last_name,
            email: req.body.email,
            address: req.body.address,
            phone: req.body.phone,
            courses: courses,
            interests: interests,
            field: req.body.field,
            experience: req.body.experience,
            posts: 0,
            comments: 0,
            token: auth_token,
            verified: false
        };
        config.db.users.find({
            uname: new_user.uname
        }, function(err, user_details) {
            if (err) {
                console.log(err);
            } else {
                if (!user_details[0]) {
                    config.db.users.insert(new_user, function(err, user_details) {
                        console.log(user_details);
                        var url = `${process.env.URL}:${process.env.PORT}/login/verify/${user_details._id}`
                        console.log(url);

                        // Verify Email
                        Mailjet.post('send').request({
                            'FromEmail': process.env.MAIL_TO_1,
                            'FromName': 'DualityTeam',
                            'Subject': "Kindly Verify your Email",
                            'Text-part': `<a href="${process.env.URL}:${process.env.PORT}/login/verify/${user_details._id}">Verify</a>`,
                            'Recipients': [{
                                'Email': user_details.email
                            }]
                        })

                        delete new_user.hash;
                        req.session.user = new_user;
                        res.redirect("/account?message=" + encodeURIComponent("S.Successfully signed up!"));
                    });
                } else {
                    res.redirect("/login/?message=" + encodeURIComponent("Error: Username already exists. Please choose another one"));
                };

            };
        });
    } else {
        res.redirect('/login')
    }
});

router.get('/logout', function(req, res) {
    req.session.destroy(function(err) {
        res.redirect(config.domain + "/login?message=" + encodeURIComponent("S.You have logged out!"));
    });

});

router.get('/verify/:token', (req, res) => {
    if (req.session.user.token == req.params.token) {
        console.log(req.session.user.uname);
        db.users.findOne({
            uname: req.session.user.uname
        }, (err, user) => {
            if (err) {
                res.send(err)
            } else {
                var user_up = {...user,
                    verified: true
                }
                console.log(user_up);
                db.users.update({
                    uname: req.session.user.uname
                }, {
                    $set: user_up
                }, (err, us) => {
                    if (err) {
                        res.send(err)
                    } else {
                        req.session.user = {...req.session.user,
                            verified: true
                        }
                        res.redirect("/account?message=" + encodeURIComponent("S.Account Verified!"));
                    }
                })
            }
        })
    }
})


module.exports = router;