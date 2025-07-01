<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $to = "your-email@example.com";  // Change to your email
    $subject = "New Location Data";
    $message = "Latitude: " . $latitude . "\nLongitude: " . $longitude;
    $headers = "From: locationtracker@example.com";

    mail($to, $subject, $message, $headers);
}
?>
