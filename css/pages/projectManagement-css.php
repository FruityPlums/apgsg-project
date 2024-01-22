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

.pm-content-main-header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin:30px 20px;
}

.pm-content-main-header-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    width: 70%;
    justify-self: center;
}

.pm-content-main-header-text{
    font-size: 1rem;
    text-align: center;
    width: 70%;
    justify-self: center;
}

.pm-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin:30px 20px;
}

.pm-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.pm-services{
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 20px;
}

.pm-service{
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

.pm-service-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.pm-service-text{
    font-size: 1rem;
    text-align: center;
}