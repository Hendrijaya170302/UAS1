<?php

function generate_captcha() {
    // Generate random number
    $random_num = mt_rand(100000, 999999);
    
    // Encode random number using Base 64
    $encoded_num = base64_encode($random_num);
    
    // Take the first 10 characters from the encoded number
    $captcha = substr($encoded_num, 0, 10);
    
    return $captcha;
}

// Generate a captcha
$captcha = generate_captcha();

// Print the captcha
echo "Captcha: " . $captcha;

?>