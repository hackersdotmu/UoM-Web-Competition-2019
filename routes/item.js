var express = require('express');
var router = express.Router();
var db = require('../config').db;
var config = require('../config');

/* GET home page. */
router.get('/', function(req, res) {
  res.render('item/item', { title: 'Item',
  
  session: req.session, });
});

router.get('/new', function(req, res) {
    res.render('item/new', { title: 'New Item',
    
    session: req.session, });
});

router.post('/new', function(req, res) {
  var new_item = {rating: -1, ...req.body} // -1 for unrated
  db.items.insert(new_item, function(err, response){
    if(err) {      
      res.send(err)
    } else {
      res.send(response)
    }
  })
});

router.get('/all', function(req, res) {
  db.items.find(function(err, items) {
    res.render('item/all', { title: 'Item', items,
    
    session: req.session, });
  })

});

module.exports = router;