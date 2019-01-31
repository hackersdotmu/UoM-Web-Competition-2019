var express = require('express');
var config = require('../config')
var router = express.Router();
var config = require('../config')
var session = require('express-session');

router.get('/', function(req, res) {
    //array = ['Agriculture', 'Engineering', 'Law', 'Management', 'Science', 'Social-Sciences', 'Technology'];

    count = {
        agriculture: 0,
        engineering: 0,
        law: 0,
        management: 0,
        science: 0,
        social: 0,
        technology: 0
    }

    config.db.users.find({}, function(err, users) {
        if (err) {
            console.log(err);
        } else {
            for (user in users) {
                field = users[user].field;
                if (field == 'Agriculture') {
                    count.agriculture = count.agriculture + 1;
                } else if (field == 'Engineering') {
                    count.engineering = count.engineering + 1;
                } else if (field == 'Law') {
                    count.law = count.law + 1;
                } else if (field == 'Management') {
                    count.management = count.management + 1;
                } else if (field == 'Science') {
                    count.science = count.science + 1;
                } else if (field == 'Social') {
                    count.social = count.social + 1;
                } else if (field == 'Technology') {
                    count.technology = count.technology + 1;
                }
            };
            temp = [];
            temp.push(count.agriculture.toString());
            temp.push(count.engineering.toString());
            temp.push(count.law.toString());
            temp.push(count.management.toString());
            temp.push(count.science.toString());
            temp.push(count.social.toString());
            temp.push(count.technology.toString());
            fields = temp.join(',');
            fields = ("[" + fields + "]");

            temp = [];
            count.agriculture = count.agriculture / users.length * 100;
            count.engineering = count.engineering / users.length * 100;
            count.law = count.law / users.length * 100;
            count.management = count.management / users.length * 100;
            count.science = count.science / users.length * 100;
            count.social = count.social / users.length * 100;
            count.technology = count.technology / users.length * 100;
            temp.push(count.agriculture.toString());
            temp.push(count.engineering.toString());
            temp.push(count.law.toString());
            temp.push(count.management.toString());
            temp.push(count.science.toString());
            temp.push(count.social.toString());
            temp.push(count.technology.toString());

            fields_percent = temp.join(',');
            fields_percent = ("[" + fields_percent + "]");


            res.render('stats', {
                title: 'Webcup',
                fields: fields,
                fields_percent: fields_percent,
                session: req.session,
            });
        };
    });

});

module.exports = router;