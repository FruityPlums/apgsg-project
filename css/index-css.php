<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../config.php';
?>

@import url('components/layout.css');
@import url('components/header.css');
@import url('components/footer.css');
@import url('components/hero.css');

.title{
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    margin:40px 10px 10px 20px;
    line-height: 1.5;
}

.main-content {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 20px;
    margin:30px 20px;
}

.main-content>.main-content-text {
    width: 70%;
    justify-self: center;
    font-size: 1.75rem;
    font-weight: 400;
    line-height: 1;
    text-align: center;
}
