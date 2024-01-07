<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../../config.php';
?>

@import url('../components/layout.css');
@import url('../components/header.css');
@import url('../components/footer.css');
@import url('../components/hero.css');

.contact-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 80px 20px;
}

.contact-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.contact-text{
    font-size: 1rem;
    text-align: center;
}