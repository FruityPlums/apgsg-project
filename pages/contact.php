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
    <title>AP Global Services Group | Contact</title>
    <link rel="stylesheet" href=" ' . CSS_PATH . '/pages/contact-css.php">
</head>
';


echo $headContent; // Echo the complete head content

$bodyContent = '
<body>
    <main>
        ' . $headerContent . '
        <div class="hero"></div>
        <h1 class="title">' . $language['contact.title'][$contentLanguage] . '</h1>
        <div class="contact-content">
            <div class="contact-header">
                <div class="contact-title">' . $language['contact.text'][$contentLanguage] . '</div>
                <div class="contact-text">' . $language['contact.text2'][$contentLanguage] . '</div>
            </div>
            <div class="contact-form">
                <form class="form">
                    <h2>' . $language['header.contact'][$contentLanguage] . '</h2>
                    <label for="name">' . $language['contact.name'][$contentLanguage] . '</label>
                    <input type="text" id="name" name="name" placeholder="">
                    <label for="email">' . $language['contact.email'][$contentLanguage] . '</label>
                    <input type="text" id="email" name="email" placeholder="">
                    <label for="message">' . $language['contact.message'][$contentLanguage] . '</label>
                    <textarea id="message" name="message" placeholder="" style="height:200px"></textarea>
                    <button>Send Message</button>
                </form>
                <div class="contact-location">
                    <div class="location-address">Media One Tower, Level 38, Office 41, Media City, Dubai, UAE, PO Box 79998</div>
                    <div class="location-phone">+971 (0)23 123 1234</div>
                    <div class="location-email">info@apgsg.ae</div>
                    <div class="location-map"></div>
                </div>
            </div>
            <div class="contact-map">
            <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Media%20One%20Tower,%20Level%201,%20Office%201,%20Media%20City,%20Dubai,%20UAE,%20PO%20Box%2012345+(AP%20Global%20Services%20Group)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population Estimator map</a></iframe></div>
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