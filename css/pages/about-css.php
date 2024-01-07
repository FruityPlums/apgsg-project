<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../../config.php';
?>

@import url('../components/layout.css');
@import url('../components/header.css');
@import url('../components/footer.css');
@import url('../components/hero.css');

.about{
    display: grid;
    margin: 80px 20px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}

.about-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2;
}

.about-content-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

@media screen and (max-width: 500px){
    .about{
        grid-template-columns: 1fr;
    }
}