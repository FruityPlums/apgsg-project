<?php
header("Content-type: text/css; charset: UTF-8");

require_once '../../config.php';
?>

@import url('../components/layout.css');
@import url('../components/header.css');
@import url('../components/footer.css');
@import url('../components/hero.css');


.intro-content{
display: grid;
margin: 80px 20px;
grid-template-columns: 1fr;
grid-gap: 20px;
}

.intro-content-title{
font-size: 1.5rem;
font-weight: bold;
margin-bottom: 20px;
text-align: center;
}

.intro-content-body{
display: grid;
grid-template-columns: 1fr 1fr;
grid-gap: 20px;
justify-items: center;
align-items: center;
height: 100%;
}

.link {
width: 100%;
height: 100%;
margin: 10px;
border: 2px solid white;
border-radius: 10px;
display: flex;
align-items: center;
justify-content: center;
height: 300px;
transition: transform 0.3s ease;
text-decoration: none; /* Remove underline from links */
}
.link:hover {
transform: scale(1.05);
}

.link-box-title {
font-size: 1.5rem;
font-weight: bold;
margin-bottom: 20px;
text-align: center;
}

.intro-content-box {
width: 100%;
height: 100%;
display: flex;
align-items: center;
justify-content: center;
font-size: 0px;
color: white;
}

.box.pm {
background: url('../../img/pm.png') no-repeat center center;
background-size: cover;
}

.box.jp{
background: url('../../img/jp.png') no-repeat center center;
background-size: cover;
}

@media screen and (max-width: 1080px){
.intro-content-body{
grid-template-columns: 1fr;
}
.link-box-title{
   display:none;
}
.intro-content-box:hover{
    background-color: rgba(0, 0, 0, 0.5);
    font-size: 1.5rem;
}
}