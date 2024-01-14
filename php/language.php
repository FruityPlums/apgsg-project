<?php

// Call the database to get language translations
try {
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $pdo->query("SELECT * FROM language");
    $language = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} 

// Process translations by key
foreach ($language as $key => $value) {
    $language[$value['identifier']] =  [
        'en' => $value['english'],
        'hr' => $value['croatian'],
        'de' => $value['german'],
        'tr' => $value['turkish'],
    ];
    unset($language[$key]);
}