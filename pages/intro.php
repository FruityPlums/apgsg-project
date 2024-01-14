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
    <title>AP Global Services Group | Services</title>
    <link rel="stylesheet" href=" ' . CSS_PATH . '/pages/intro-css.php">
</head>
';


echo $headContent; // Echo the complete head content

$bodyContent = '
<body>
    <main>
        ' . $headerContent . '
        <div class="hero"></div>
        <h1 class="title">' . $language['header.intro'][$contentLanguage] . '</h1>
        <div class="intro-content">
            <div class="intro-content-title">' . $language['intro.title'][$contentLanguage] . '</div>
        <div class="intro-content-body">
            <a href="projectManagement" class="link box pm"><div class="intro-content-box">' . $language['header.project_management'][$contentLanguage] . '</div></a>
            <a href="jobPlacement" class="link box jp"><div class="intro-content-box">' . $language['header.job_placement'][$contentLanguage] . '</div></a>
            <div class="link-box-title">' . $language['header.project_management'][$contentLanguage] . '</div>
            <div class="link-box-title">' . $language['header.job_placement'][$contentLanguage] . '</div>
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
