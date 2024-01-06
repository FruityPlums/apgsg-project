<?php

require_once 'config.php';


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
    <title>My Website</title>
    <link rel="stylesheet" href=" '. CSS_PATH .'/index.css">
</head>
';


echo $headContent; // Echo the complete head content

$bodyContent = '
<body>
    <main>
        ' . $headerContent . '
        <div class="hero">
            <div class="hero-title">'. $language['home.title'][$contentLanguage] .'</div>
            <div class="hero-subtitle">'. $language['home.text'][$contentLanguage] .'</div>
        </div>
        ' . $footerContent . '
    </main>
    <script type="module" src=" '. JS_PATH .'/index.js"></script>
</body>
';

echo $bodyContent; // Echo the complete body content

$htmlContent = '</html>';

echo $htmlContent;
?>