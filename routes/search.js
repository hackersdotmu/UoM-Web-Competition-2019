var express = require('express');
var router = express.Router();
var config = require('../config')

router.get('/', function(req, res) {
  res.render('search', { 
    title: 'Search',
    
    session: req.session,
  });
});

module.exports = router;