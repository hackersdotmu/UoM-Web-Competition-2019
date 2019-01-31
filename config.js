var mongojs = require('mongojs');

var config = {}
config.db = mongojs('mongodb://user_web:pass_comp0@ds211635.mlab.com:11635/web_competition', ['users']);
config.domain = 'http://localhost:' + process.env.PORT;
config.base = `${process.env.URL}:${process.env.PORT}/`;

module.exports = config;