var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var mongojs = require('mongojs');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var session = require('express-session');
var config = require('./config')

//Routes
var routes = require('./routes/index');
var users = require('./routes/users');
var login = require('./routes/login')
var account = require('./routes/account')
var terms = require('./routes/terms')
var statistics = require('./routes/statistics');
var about = require('./routes/about');
var search = require('./routes/search');
var contact = require('./routes/contact');
var item = require('./routes/item');
var blog = require('./routes/blog');
var account = require('./routes/account');
var adminpanel = require('./routes/adminpanel');
var question = require('./routes/question');
var api = require('./routes/api');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

//app.use(favicon("./public/img/favicon.ico")); //Need to enable and set favicon
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded());
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));


app.use(session({
    secret: "webcup2019teamIS",
    resave: false,
    saveUninitialized: true,
    cookie: {
        secure: false,
        maxAge: 3600000
    }
}));

app.use('/', routes);
app.use('/users', users);
app.use('/login', login);
app.use('/terms', terms);
app.use('/account', account);
app.use('/stats', statistics);
app.use('/about', about);
app.use('/contact', contact);
// app.use('/search', search);
app.use('/item', item);
// app.use('/blog', blog);
app.use('/adminpanel', adminpanel);
app.use('/question', question);
app.use('/api', api);

/// catch 404 and forwarding to error handler
app.use(function(req, res, next) {
    var err = new Error('Not Found');
    err.status = 404;
    next(err);
});

/// error handlers

// development error handler
// will print stacktrace
if (app.get('env') === 'development') {
    app.use(function(err, req, res, next) {
        res.status(err.status || 500);
        res.render('404', {
            message: err.message,
            error: err
        });
    });
}

// production error handler
// no stacktraces leaked to user
app.use(function(err, req, res, next) {
    res.status(err.status || 500);
    res.render('error', {
        message: err.message,
        error: {}
    });
});

module.exports = app;