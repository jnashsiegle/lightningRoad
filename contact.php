<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$formcontent=" From: $name \n  Message: $message";
$recipient = "jlousiegle@gmail.com";
$subject = "$name sent you a message from Contact @ Lightning Road";
$mailheader = "From: $email \r\n";
sendmail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

/* Display Thank you modal */
 echo "<script>$('#thankyouModal').modal('show')</script>"
};



?>