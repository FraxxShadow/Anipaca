<?php 

$conn = new mysqli("HOSTNAME", "USERNAME", "PASSWORD", "DATABASE");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Database connection failed.");
}

$websiteTitle = "AniPaca";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "genanime@gmail.com";

$version = "2.1";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_"; 

// all the api you need
$zpi = "https://zen-api-phi.vercel.app/"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed
//$proxy = "https://m3u8-proxy-cors-three-kohl.vercel.app/"; //https://github.com/MetaHat/m3u8-streaming-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
