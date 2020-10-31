<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}
$to=$_SESSION["email"];
                          

require_once('C:\Users\varsh\Desktop\new xampp\htdocs\team-21\class.phpmailer.php');


$mail = new PHPMailer;
$email='usemamulya@gmail.com';

  if(!$mail->validateAddress($email)){
    echo 'Invalid Email Address';
    exit;
  }


  $email_body = "";
  $email_body .= "Form submitted successfully";

  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls"; 
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->Username = "usemamulya@gmail.com";
  $mail->Password = "Amulya,123";
  
  $mail->setFrom($email, 'amulya');
  $mail->addAddress($to, 'Student'); 
  $mail->isHTML(true);                               
  $mail->Subject = "Update on the form";
  $mail->Body = $email_body;

  if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
  }
  header("Location: index.html");
mysqli_close($link);
?>


