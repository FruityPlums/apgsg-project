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
    <link rel="stylesheet" href=" ' . CSS_PATH . '/pages/projectManagement-css.php">
</head>
';


echo $headContent; // Echo the complete head content

$bodyContent = '
<body>
    <main>
        ' . $headerContent . '
        <div class="hero">
            <div class="hero-title">' . $language['project_management.title'][$contentLanguage] . '</div>
        </div>

        <div class="pm-content-main-header">
            <div class="pm-content-main-header-title">' . $language['project_management.subtitle'][$contentLanguage] . '</div>
            <div class="pm-content-main-header-text">' . $language['project_management.text'][$contentLanguage] . '</div>
        </div>

        <div class="pm-content">
            <div class="pm-title">' . $language['project_management.services.title'][$contentLanguage] . '</div>
            <div class="pm-services">
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.conceptualization_and_planning.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.conceptualization_and_planning.text'][$contentLanguage] . '</div>
                </div>
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.resource_management.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.resource_management.text'][$contentLanguage] . '</div>
                </div>
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.risk_management.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.risk_management.text'][$contentLanguage] . '</div>
                </div>
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.quality_control.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.quality_control.text'][$contentLanguage] . '</div>
                </div>
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.progress_monitoring.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.progress_monitoring.text'][$contentLanguage] . '</div>
                </div>
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.communication_management.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.communication_management.text'][$contentLanguage] . '</div>
                </div>
                <div class="pm-service">
                    <div class="pm-service-title">' . $language['project_management.services.why_us.title'][$contentLanguage] . '</div>
                    <div class="pm-service-text">' . $language['project_management.services.why_us.text'][$contentLanguage] . '</div>
                </div>
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
