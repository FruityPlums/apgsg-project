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

.about{
    display: grid;
    margin:30px 20px;
    grid-template-columns: 1fr ;
    grid-gap: 20px;
}

.about-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #c19a6b;
    width: 70%;
    justify-self: center;
}

.about-content-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.about-content-text{
    width: 70%;
    justify-self: center;
}