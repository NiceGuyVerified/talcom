const config = require('../config.json');
const express = require('express');
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

router.use(cors());
router.post('/ping', function (req, res, next) {
    res.send('auth pong!')
});

module.exports = router;
