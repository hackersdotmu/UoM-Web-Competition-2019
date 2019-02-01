var express = require('express');
var config = require('../config')
var router = express.Router();
var config = require('../config')
var session = require('express-session');
const bcrypt = require('bcryptjs');

/* GET account page. */
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
        res.render('account', {
            title: 'Webcup',
            message: message,
            session: req.session,
            base : config.base
        });
    } else {
        res.redirect(config.domain + "/login");
    }
});

router.post('/update', function(req, res) {
    config.db.users.find({
        uname: req.session.user.uname
    }, function(err, user_details) {
        if (err) {
            console.log(err);
        } else {
            if (user_details[0]) {
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
                user_updated = {
                    first_name: req.body.first_name,
                    last_name: req.body.last_name,
                    email: req.body.email,
                    address: req.body.address,
                    phone: req.body.phone,
                    courses: courses,
                    interests: interests,
                    field: req.body.field,
                    experience: req.body.experience,
                    admin: false
                };
                config.db.users.update({
                    uname: req.session.user.uname
                }, {
                    $set: user_updated
                }, function(err, user_details) {
                    user_updated.uname = req.session.user.uname;
                    user_updated.token = req.session.user.token;
                    req.session.user = user_updated;
                    res.redirect(config.domain + "/account?message=" + encodeURIComponent("S.Successfully updated account!"));
                });
            } else {
                res.redirect(config.domain + "/login/?message=" + encodeURIComponent("Error: You dont have a registered account."));
            };

        };
    });
});

router.post('/updatepw', function(req, res) {
    config.db.users.find({
        uname: req.session.user.uname
    }, function(err, user_details) {
        if (err) {
            console.log(err);
        } else {
            if (user_details[0]) {
                user_details = user_details[0];
                let hash = bcrypt.hashSync(req.body.new_pw, 10);
                if (bcrypt.compareSync(req.body.pw, user_details.hash)) {
                    user_updated = {
                        hash: hash
                    };
                    config.db.users.update({
                        uname: req.session.user.uname
                    }, {
                        $set: user_updated
                    }, function(err, user_details) {
                        res.redirect(config.domain + "/account?message=" + encodeURIComponent("S.Successfully updated password!"));
                    });
                } else {
                    res.redirect(config.domain + "/account?message=" + encodeURIComponent("Password change Failed: Incorrect password entered"));
                }

            } else {
                res.redirect(config.domain + "/login/?message=" + encodeURIComponent("Error: You dont have a registered account."));
            };

        };
    });
});
module.exports = router;;