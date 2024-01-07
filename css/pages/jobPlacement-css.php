<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../../config.php';
?>

@import url('../components/layout.css');
@import url('../components/header.css');
@import url('../components/footer.css');
@import url('../components/hero.css');


.jp-title{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 80px 20px;
}

.jp-title-header{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.jp-title-text{
    font-size: 1rem;
    text-align: center;
}

.jp-content{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    margin: 80px 20px;
}

.jp-content{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    margin: 80px 20px;
}

.jp-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.jp-services_for_companies{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2;
}

.jp-service{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2;
}

.jp-service-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.jp-service-text{
    font-size: 1rem;
    text-align: center;
}

.jp-services_for_candidates{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2;
}

@media screen and (max-width: 1080px){
    .jp-content{
        grid-template-columns: 1fr;
    }
}