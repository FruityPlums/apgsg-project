<?php

require_once FS_ROOT . '/config.php';

include FS_PHP_PATH . '/language.php';

$header_content = '

<header class="header-main" data-height-onload="80" data-height-loaded="true" data-fixed-height-onload="80" style="top: 0px;">
    <div class="header-container">
        <div class="header-logo">
            <img src=" '. IMG_PATH .'/logo.jpg"
            alt="logo" width="80" height="80">
        </div>
        <div class="hamburger-menu">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="header-navbar" id="navbar">
            <ul>
            <li>
                    <div class="header-language">
                        <select>
                            <option value="en">English</option>
                            <option value="hr">Hrvatski</option>
                            <option value="de">Deutsch</option>
                            <option value="tr">Türkçe</option>
                        </select>
                    </div>
                </li>
                <li><a href="'. ROOT_URL .'pages/contact.php">'. $language['header.contact'][$contentLanguage] .'</a></li>
                <li><a href="'. ROOT_URL .'pages/jobPlacement.php">'. $language['header.job_placement'][$contentLanguage] .'</a></li>
                <li><a href="'. ROOT_URL .'pages/projectManagement.php">'. $language['header.project_management'][$contentLanguage] .'</a></li>
                <li><a href="'. ROOT_URL .'pages/intro.php">'. $language['header.intro'][$contentLanguage] .'</a></li>
                <li><a href="'. ROOT_URL .'pages/about.php">'. $language['header.about'][$contentLanguage] .'</a></li>
                <li><a href="'. ROOT_URL .'index.php">'. $language['header.home'][$contentLanguage] .'</a></li>
            </ul>
        </div>
    </div>
</header>
';

echo $header_content;