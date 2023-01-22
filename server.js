const express = require('express');
const app = express();

app.listen(8080,function(){
  console.log('Server is running on port 8080');
});

app.get('/', function(req,res){
  res.sendFile(__dirname + '/mainpage.html');
});

app.get('/login.html', function(req,res){
  res.sendFile(__dirname + '/login.html');
});

app.get('/mainpage.html', function(req,res){
  res.sendFile(__dirname + '/mainpage.html');
});

app.get('/registration.html', function(req,res){
  res.sendFile(__dirname + '/registration.html');
});
