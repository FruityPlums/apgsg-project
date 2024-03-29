<?php


// DB LOCALHOST
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');

// LOCAL DEV
define('ROOT_URL', 'http://localhost/apgsg-project/'); // Root URL
define('FS_ROOT', 'D:/samp/htdocs/apgsg-project'); // Root path

// FILE SYSTEM PATHS
/* define('FS_ROOT', __DIR__); // Root path */
define('FS_PHP_PATH', FS_ROOT . '/php'); // Path for PHP logic files
define('FS_COMPONENTS_PATH', FS_ROOT . '/components'); // Path for components
define('FS_PAGES_PATH', FS_ROOT . '/pages'); // Path for pages


// URL PATHS
/* define('ROOT_URL', 'https://apgsg.ae/'); // Root URL */
define('JS_PATH', ROOT_URL . 'js'); // Path for JavaScript files
define('CSS_PATH', ROOT_URL . 'css'); // Path for CSS files
define('IMG_PATH', ROOT_URL . 'img'); // Path for image files