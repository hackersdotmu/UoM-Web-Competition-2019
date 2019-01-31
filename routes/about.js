var express = require('express');
var router = express.Router();
var config = require('../config')

/* GET about page. */
router.get('/', function(req, res) {
    res.render('about', {
        title: 'About',
        session: req.session,
    });
});

module.exports = router;