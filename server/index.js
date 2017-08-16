const config = require('./config.json');
const express = require('express');
const app = express();
const auth = require('./lib/auth.js');
const cors = require('cors');
const chalk = require('chalk');
const mysql = require('mysql');
const dbcon = mysql.createConnection({
    host: config.db.host,
    user: config.db.user,
    password: config.db.password,
    database: config.db.database
});

dbcon.connect();

app.use('/api/auth', auth);
app.get('/api/ping', function (req, res) {
    res.send('pong');
    console.log("Server pinged.")
});

let port = process.env.PORT || 8080;
app.listen(port, function () {
    console.log('Launched on port ' + chalk.blue(port));
});
