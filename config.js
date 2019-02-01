var mongojs = require('mongojs');

var config = {}
config.db = mongojs('mongodb://user_web:pass_comp0@ds211635.mlab.com:11635/web_competition', ['users']);
config.url = 'http://localhost';
config.domain = config.url + ':' + process.env.PORT;

config.base = `${config.url}:${process.env.PORT}/`;
config.captcha = `${process.env.CAPTCHA_SITE_KEY}`

module.exports = config;