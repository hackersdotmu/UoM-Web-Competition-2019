var express = require('express');
var config = require('../config')
var router = express.Router();
var config = require('../config')
var showdown = require('showdown');
var converter = new showdown.Converter();

/* GET home page. */
router.get('/', function(req, res) {
    res.send('Blog')
});

router.get('/new', function(req, res) {
  if(req.session.user) { 
    res.render('blog/new', { 
      title: 'Item',
      
      session: req.session, 
    })
  } else {
    res.redirect('/blog')
  }
});

router.get('/new', function(req, res) {
  if(req.session.user) { 
    res.render('blog/new', { 
      title: 'Item',
      
      session: req.session, 
    })
  } else {
    res.redirect('/blog')
  }
});

router.post('/new', function(req, res) {
  if(req.session.user) { 
    var parsed = converter.makeHtml(req.body.content) ;
    res.render('blog/confirm', {
      
      session: req.session, 
      title: req.body.title,
      content: parsed,
      raw: req.body.content,
      uname: req.session.uname
    })
  } else {
    res.redirect('/blog')
  }
});

router.post('/save', function(req, res) {
  if(req.session.user) { 
    res.send(req.body)
  } else {
    res.redirect('/blog')
  }
});

module.exports = router;