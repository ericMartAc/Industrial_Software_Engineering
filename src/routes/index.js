const express = require("express");
const router = express.Router();
const company = "Industrial Software Enginneering", titleIndex = "ISE",
 Author = "Eric Martinez Acelas",titleContact = "ISE - Contact";
/*
router.get('/',(req,res) => {
    res.render('index',{title:"ARControllers - INDEX"});
});

router.get('/contact',(req,res) => {
    res.render('contact',{title:"ARControllers - Contacto"});
});
*/
router.get('/',(req,res) => {
    res.render('index.html',{company,titleIndex,Author});
});
router.get('/contact',(req,res) => {
    res.render('contact.html',{company,titleContact,Author});
});




module.exports = router;