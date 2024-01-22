<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../../config.php';
?>

@import url('../components/layout.css');
@import url('../components/header.css');
@import url('../components/footer.css');
@import url('../components/hero.css');

.title{
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    margin:40px 10px 10px 20px;
    line-height: 1.5;
}

.contact-content{
    display: grid;
    grid-template:
        "header header" 
        "form  map"
}

.contact-header{
    grid-area: header;
    padding: 20px;
    width: 70%;
    justify-self: center;
}

.contact-form{
    grid-area: form;
    display : grid;
    grid-template:
        "contact-form"
        "location";
    padding: 20px 10px;
}

.form{
    grid-area: contact-form;
    
}

.contact-location{
    grid-area: location;
    padding: 20px;
}

.contact-title{
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: center;
}

.contact-text{
    font-size: 1rem;
    text-align: center;
}

.contact-form input[type=text], .contact-form input[type=email], .contact-form textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 20px;
    resize: vertical;
}

.contact-form button{
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

@media screen and (max-width: 1080px) {
    .contact-content{
        grid-template:
            "header"
            "form"
            "map";
    }
}