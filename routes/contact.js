var express = require('express');
var router = express.Router();
var dotenv = require('dotenv').config();
var config = require('../config')

var Mailjet = require('node-mailjet').connect(process.env.CONTACT_MAIL, process.env.CONTACT_MAIL_PASS);

/* GET home page. */
router.get('/', function(req, res) {
    res.render('contact', { 
        title: 'Contact', 
        message:'',
        
        session: req.session,
    });
});

router.get('/:message', function(req, res) {
    if(req.params.message=="success") {
        res.render('contact', { 
            title: 'Contact',
            message:"success",
            
            session: req.session,
        });        
    } else if (req.params.message=="failure") {
        res.render('contact', { 
            title: 'Contact',
            message:"failed",
            
            session: req.session,
        });
    } else {
        res.render('contact', { 
            title: 'Contact',
            message:'',
            
            session: req.session,
        });
    }
});

router.post('/', function(req, res) {
    Mailjet.post('send').request({
        'FromEmail': req.body.email,
        'FromName': req.body.name,
        'Subject':  "Contact Form - Web Competition",
        'Text-part': req.body.message || '[No message]',
        'Recipients': [{'Email':process.env.MAIL_TO_1}]
    }).then(()=>res.redirect('/contact/success')).catch((err)=>res.redirect('/contact/failure'))
})

module.exports = router;