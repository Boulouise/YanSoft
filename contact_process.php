<?php


use PHPMailer\PHPMailer\PHPMailer;

header("Location: index.html");
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

print_r($_POST);
echo "<br>";
echo $_POST['email'];

echo "<br>";

$mail = new PHPMailer;
$mail->isSMTP(); 
// $mail->SMTPDebug = 2; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = "587"; // typically 587 
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = "maryamboulouise@gmail.com";
$mail->Password = "";
$mail->setFrom("saidblanchette@gmail.com", "said Blanchette");
$mail->addAddress($_POST['email'], $_POST['name']);
$mail->Subject = 'new contact';
$mail->msgHTML("test body"); // remove if you do not want to send HTML email
$mail->AltBody = 'HTML not supported';


$mail->send();
 
// exit();
 

?>

