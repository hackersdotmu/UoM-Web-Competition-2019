var express = require('express');
var router = express.Router();
var session = require('express-session');
var config = require('../config')


router.get('/', function(req, res) {
    console.log(req.session.user);
    res.render('terms', {
        title: 'Webcup',
        
        session: req.session,
    });
});

module.exports = router;