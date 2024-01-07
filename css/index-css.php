<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../config.php';
?>

@import url('components/layout.css');
@import url('components/header.css');
@import url('components/footer.css');
@import url('components/hero.css');

.main-content {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 20px;
    margin: 80px 20px;
}

.main-content>.main-content-text {
    font-size: 20px;
    font-weight: 400;
    line-height: 1;
    text-align: center;
}

@media only screen and (max-width:1080px) {
    .hero>.hero-title {

        font-size: 40px;

    }
    
    .hero>.hero-subtitle {

        font-size: 20px;
    }
    
}