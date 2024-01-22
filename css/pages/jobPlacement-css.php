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

.jp-title-container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin:30px 20px;
}

.jp-title-header{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    width: 70%;
    justify-self: center;
}

.jp-title-text{
    font-size: 1rem;
    text-align: center;
    width: 70%;
    justify-self: center;
}

.jp-content{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    margin:30px 20px;
}

.jp-content{
    display: grid;
    grid-template:
        "company candidates"
        "company_text candidates_text";
    grid-gap: 20px;
    margin:30px 20px;
}

.jp-title{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.jp-services_for_companies{
    grid-area: company_text;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #c19a6b;
}

.jp-service{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #c19a6b;
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
    grid-area: candidates_text;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #c19a6b;
}

@media screen and (max-width: 768px) {
    .jp-content{
        grid-template:
            "company"
            "company_text"
            "candidates"
            "candidates_text";
    }
}