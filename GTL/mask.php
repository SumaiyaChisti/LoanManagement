<?php
function maskPhoneNumber($phoneNumber) {
    // Keep the last four digits visible
    $visibleDigits = 2;
    
    // Calculate the length of the phone number
    $phoneNumberLength = strlen($phoneNumber);
    
    // Mask all digits except the last four
    $maskedNumber = str_repeat('*', $phoneNumberLength - $visibleDigits) . substr($phoneNumber, -$visibleDigits);
    
    return $maskedNumber;
}

// Example usage
// $originalNumber = '1234567890';
// $maskedNumber = maskPhoneNumber($originalNumber);
// echo $maskedNumber;
?>
