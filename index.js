// import express from 'express';
const express = require('express')
var app = express()
// import path from 'path';
const path = require('path')

app.set('port', (process.env.PORT || 5000))
app.engine('html', require('ejs').renderFile);
app.use(express.static(path.join(__dirname, 'client')));
app.set('views', path.join(__dirname, 'client'));
app.set('view engine', 'html');

app.get('/', (req, res) => {
//   res.render('/Home.html');
//   res.sendFile(__dirname + '/Home.html');
    res.render(__dirname + '/client/Home.html');
})

app.listen(app.get('port'), function() {
  console.log("Node app is running at localhost:" + app.get('port'))
})
