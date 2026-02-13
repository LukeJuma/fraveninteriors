<?php
$to = 'fraveninteriors@gmail.com';
$name = isset($_POST["name"]) ? trim($_POST["name"]) : '';
$email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
$message = isset($_POST["message"]) ? trim($_POST["message"]) : '';
$phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : '';
$service = isset($_POST["service"]) ? trim($_POST["service"]) : '';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$body = '<table style="width:100%; border-collapse: collapse;">';
$body .= '<tr><td style="padding:8px; border:1px solid #eee;"><strong>Name</strong></td><td style="padding:8px; border:1px solid #eee;">' . htmlspecialchars($name) . '</td></tr>';
$body .= '<tr><td style="padding:8px; border:1px solid #eee;"><strong>Email</strong></td><td style="padding:8px; border:1px solid #eee;">' . htmlspecialchars($email) . '</td></tr>';
$body .= '<tr><td style="padding:8px; border:1px solid #eee;"><strong>Phone</strong></td><td style="padding:8px; border:1px solid #eee;">' . htmlspecialchars($phone) . '</td></tr>';
if ($service) {
    $body .= '<tr><td style="padding:8px; border:1px solid #eee;"><strong>Service</strong></td><td style="padding:8px; border:1px solid #eee;">' . htmlspecialchars($service) . '</td></tr>';
}
$body .= '<tr><td style="padding:8px; border:1px solid #eee;"><strong>Message</strong></td><td style="padding:8px; border:1px solid #eee;">' . nl2br(htmlspecialchars($message)) . '</td></tr>';
$body .= '</table>';

$subject = 'Fraven Interiors – New enquiry from ' . (strlen($name) ? $name : 'website');

if ($name && $email && $message && mail($to, $subject, $body, $headers)) {
    echo 'The message has been sent.';
} else {
    echo 'Failed to send. Please try again or email us at fraveninteriors@gmail.com';
}
