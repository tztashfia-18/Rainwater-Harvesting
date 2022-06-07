<?php
session_start();


$email=$_GET['email'] ;

$amount = $_POST['amount'];
$to_email = $email;

$subject = "Payment Slip";
$body = "Hi, This is test email send by PHP Script Total Amount Paid: $amount";
$headers = "From: rainwh3@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>