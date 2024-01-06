<?php

require_once FS_ROOT . '/config.php';

include FS_PHP_PATH . '/language.php';

$footerContent = '
<div class="footer">
    <div class="footer-contact" id="contact">
        <form class="form">
            <h2>'. $language['header.contact'][$contentLanguage] .'</h2>
            <p type="'. $language['contact.name'][$contentLanguage] .'"><input placeholder="."></input></p>
            <p type="'. $language['contact.email'][$contentLanguage] .'"><input placeholder=""></input></p>
            <p type="'. $language['contact.message'][$contentLanguage] .'"><input placeholder=""></input></p>
            <button>Send Message</button>
        </form>
    </div>
    <div class="footer-location">
        <div class="location-title">LOCATION</div>
        <div class="location-address">Media One Tower, Level 1, Office 1, Media City, Dubai, UAE, PO Box 12345</div>
        <div class="location-phone">+971 (0)23 123 1234</div>
        <div class="location-email">info@a.com</div>
        <div class="location-map"></div>
    </div>
</div>
<div class="copyright">© Copyright 2022 - All Rights Reserved</div>
';

echo $footerContent;