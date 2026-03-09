<?php

function getBaseUrl() {
    // Determine the protocol (http or https)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

    // Get the host name (e.g., www.example.com or localhost)
    $host = $_SERVER['HTTP_HOST'];

    // Get the directory path of the script, removing the script name itself
    $script_name = $_SERVER['SCRIPT_NAME'];
    $path = str_replace(basename($script_name), "", $script_name);

    // Construct the base URL
    $base_url = $protocol . "://" . $host . $path;

    return $base_url;
}

function callNumber(){
    return "+91 82000 17181";
}

function contactEmail(){
    return "contact@shreegurvetech.com";
}

function officeAddress(){
    return "103, Hany Arcade, Dabholi Village, Katargam, Surat - 395004, India";
}

function representativeOfficeAddress(){
    return "710, Westgate by True Value, Nr. YMCA Club, Makarba, Ahmedabad - 380015, India";
}

function facebookLink(){
    return "facebook.com";
}

function linkedinLink(){
    return "linkedin.com";
}

function twitterLink(){
    return "twitter.com";
}

function instagramLink(){
    return "instagram.com";
}

function youtubeLink(){
    return "youtube.com";
}

function whatsappLink(){
    return "whatsapp.com";
}
?>