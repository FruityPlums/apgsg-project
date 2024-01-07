<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../../config.php';
?>

@import url('../components/layout.css');
@import url('../components/header.css');
@import url('../components/footer.css');
@import url('../components/hero.css');


.pm-content-main-header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 80px 20px;
}

.pm-content-main-header-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.pm-content-main-header-text{
    font-size: 1rem;
    text-align: center;
}

.pm-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 80px 20px;
}

.pm-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.pm-services{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 20px;
}

.pm-services > .pm-service:nth-child(7):nth-last-child(1){
    grid-column-start: 2;
    grid-column-end: 3;
}


.pm-service{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2;
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

@media screen and (max-width: 720px){
    .pm-services{
        grid-template-columns: 1fr;
    }

    .pm-services > .pm-service:nth-child(7):nth-last-child(1){
        grid-column-start: auto;
        grid-column-end: auto;
    }
}