<?php

require_once '../config.php';

// Get cookie language
if (isset($_COOKIE['language'])) {
    $contentLanguage = $_COOKIE['language'];
} else {
    $contentLanguage = 'en';
}

ob_start();

include FS_COMPONENTS_PATH . '/meta.php';
$metaContent = ob_get_clean();

ob_start(); // Start new buffer for header
include FS_COMPONENTS_PATH . '/header.php';
$headerContent = ob_get_clean(); // Get header content and end buffer

ob_start(); // Start new buffer for footer
include FS_COMPONENTS_PATH . '/footer.php';
$footerContent = ob_get_clean(); // Get footer content and end buffer

// Get language translations
include FS_PHP_PATH . '/language.php';


// Depending on the language, change the header content
$headContent = '
<!DOCTYPE html>
<html lang="' . $contentLanguage . '">
<head>
    ' . $metaContent . '
    <title>AP Group</title>
    <link rel="stylesheet" href=" ' . CSS_PATH . '/pages/about-css.php">
</head>
';


echo $headContent; // Echo the complete head content

$bodyContent = '
<body>
    <main>
        ' . $headerContent . '
        <div class="hero">
            <div class="hero-title">' . $language['header.about'][$contentLanguage] . '</div>
        </div>
        <div class="about">
        <div class="about-content">
            <div class="about-content-title">' . $language['about.who_we_are.title'][$contentLanguage] . '</div>
            <div class="about-content-text">' . $language['about.who_we_are.text'][$contentLanguage] . '</div>
        </div>
        <div class="about-content">
            <div class="about-content-title">' . $language['about.our_vision.title'][$contentLanguage] . '</div>
            <div class="about-content-text">' . $language['about.our_vision.text'][$contentLanguage] . '</div>
        </div>
        <div class="about-content">
            <div class="about-content-title">' . $language['about.our_mission.title'][$contentLanguage] . '</div>
            <div class="about-content-text">' . $language['about.our_mission.text'][$contentLanguage] . '</div>
        </div>
        <div class="about-content">
            <div class="about-content-title">' . $language['about.why_us.title'][$contentLanguage] . '</div>
            <div class="about-content-text">' . $language['about.why_us.text'][$contentLanguage] . '</div>
        </div>
        <div class="about-content">
            <div class="about-content-title">' . $language['about.our_team.title'][$contentLanguage] . '</div>
            <div class="about-content-text">' . $language['about.our_team.text'][$contentLanguage] . '</div>
        </div>
        <div class="about-content">
            <div class="about-content-title">' . $language['about.contact_us.title'][$contentLanguage] . '</div>
            <div class="about-content-text">' . $language['about.contact_us.text'][$contentLanguage] . '</div>
        </div>
        </div>
        ' . $footerContent . '
    </main>
    <script type="module" src=" ' . JS_PATH . '/index.js"></script>
</body>
';

echo $bodyContent; // Echo the complete body content

$htmlContent = '</html>';

echo $htmlContent;
