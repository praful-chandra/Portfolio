const express = require("express");
const mongoose = require("mongoose");
const app = express();

const path = require("path");

const PORT = process.env.PORT || 3000;


// mongoose.connect(process.env.MONGO_URI, {
//     useFindAndModify : false,
//     useNewUrlParser: true,
//     useUnifiedTopology: true,
//   }).then(()=>console.log("mongodb connected")).catch(err=>console.log(err));


app.listen(PORT,()=>{
    console.log("RUnning on "+PORT);
    
})

app.use(express.urlencoded())

app.use(express.static(path.join(__dirname, 'client')));


const messageSchema = new mongoose.Schema({
    name : String,
    email : String,
    phonenumber : Number,
    message : String
})

const messageModel = mongoose.model("message",messageSchema);

app.post("/sendcontact",(req,res)=>{
    new messageModel({
        ...req.body
    }).save().then(data=> res.sendFile(path.join(__dirname, 'client', 'success.html')))

})

app.get('*', function(req, res) {
    res.sendFile(path.join(__dirname, 'client', 'index.html'));
  });