require('dotenv').config();
const express = require('express');
const routes = require('./routes/route');
const app = express();
const port = 3000;
const mongoose = require('mongoose');
const mongoString = "mongodb://localhost:27017/meteodb"
mongoose.connect(mongoString);
const database = mongoose.connection

database.on('error', (error) => {
    console.log(error)
})

database.once('connected', () => {
    console.log('Database Connected');
})

app.use('/static', express.static('public'))

app.use('/public', express.static(__dirname + '/public'));

app.get('/', function (req, res) {
    res.sendFile(__dirname + '/public/index.html');
});

app.use(express.json())
// For parsing application/x-www-form-urlencoded
app.use(express.urlencoded({ extended: true }));

app.use('/api', routes);

// receive post body data from index.html in the public folder




app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})

app.use(express.static(__dirname + '/node_modules/bootstrap/dist'));
app.use("/css",express.static("../node_modules/bootstrap/dist/css"));
app.use("/js",express.static("../node_modules/bootstrap/dist/js"));