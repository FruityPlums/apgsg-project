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
    <title>AP Global Services Group | Job Placement</title>
    <link rel="stylesheet" href=" ' . CSS_PATH . '/pages/jobPlacement-css.php">
</head>
';


echo $headContent; // Echo the complete head content

$bodyContent = '
<body>
    <main>
        ' . $headerContent . '
        <div class="hero">
        </div>
        <h1 class="title">' . $language['job_placement.title'][$contentLanguage] . '</h1>
        <div class="jp-title-container">
            <div class="jp-title-header">' . $language['job_placement.subtitle'][$contentLanguage] . '</div>
            <div class="jp-title-text">' . $language['job_placement.text'][$contentLanguage] . '</div>
        </div>

        <div class="jp-content">
            <div class="jp-title">' . $language['job_placement.services_for_companies.title'][$contentLanguage] . '</div>
            <div class="jp-services_for_companies">
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_companies.analysis_and_consulting.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_companies.analysis_and_consulting.text'][$contentLanguage] . '</div>
                </div>
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_companies.recruitment_and_selection.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_companies.recruitment_and_selection.text'][$contentLanguage] . '</div>
                </div>
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_companies.visa_and_immigration.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_companies.visa_and_immigration.text'][$contentLanguage] . '</div>
                </div>
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_companies.onboarding_and_integration.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_companies.onboarding_and_integration.text'][$contentLanguage] . '</div>
                </div>
            </div>
            <div class="jp-title">' . $language['job_placement.services_for_candidates.title'][$contentLanguage] . '</div>
            <div class="jp-services_for_candidates">
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_candidates.career_consulting.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_candidates.career_consulting.text'][$contentLanguage] . '</div>
                </div>
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_candidates.visa_and_immigration.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_candidates.visa_and_immigration.text'][$contentLanguage] . '</div>
                </div>
                <div class="jp-service">
                    <div class="jp-service-title">' . $language['job_placement.services_for_candidates.why_us.title'][$contentLanguage] . '</div>
                    <div class="jp-service-text">' . $language['job_placement.services_for_candidates.why_us.text'][$contentLanguage] . '</div>
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
