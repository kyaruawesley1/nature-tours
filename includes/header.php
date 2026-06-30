<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Naturewise Tours - A Tour on African Safaris</title>
    <link rel="icon" href="images/logo.JPG">
    <link rel="apple-touch-icon" href="images/logo.JPG">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        /* Hide the default Google Translate UI completely */
        .goog-te-banner-frame.skiptranslate, #google_translate_element { display: none !important; } 
        body { top: 0px !important; }
    </style>
</head>
<body>

<header>
    <nav class="nav-container">
        <div class="logo">
            <a href="index.php"><img src="images/logo.JPG" alt="Naturewise Tours"></a>
        </div>
        
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="destinations.php">Destinations</a></li>
            <li><a href="safari.php">Safaris</a></li>
            <li><a href="climbing.php">Climbing</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="faq.php">FAQ</a></li>
            
            <li class="custom-lang">
                LANGUAGE ▼
                <ul class="lang-dropdown">
                    <li><a href="#" onclick="switchLanguage('en'); return false;">English</a></li>
                    <li><a href="#" onclick="switchLanguage('sw'); return false;">Swahili</a></li>
                    <li><a href="#" onclick="switchLanguage('de'); return false;">Deutsch</a></li>
                    <li><a href="#" onclick="switchLanguage('fr'); return false;">Français</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</header>