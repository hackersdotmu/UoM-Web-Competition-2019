var express = require('express');
var router = express.Router();
var db = require('../config').db;

router.get('/', function(req, res) {
  res.json({
    team: 'Duality',
    participants: ['Nirmal', 'Isfaaq'],
    message: 'REST Api'
  })
})

router.get('/questions', (req, res)=>{
  db.questions.find({}, (err, questions)=>{
    if(err) {
      res.json (err)
    } else {
      res.json(questions)
    }
  })
});

router.get('/users', (req, res)=>{
  db.users.find({}, (err, users)=>{
    if(err) {
      res.json (err)
    } else {
      res.json(users)
    }
  })
});

module.exports = router;