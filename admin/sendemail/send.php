<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {

  $templateFile = 'email_template.php';
    if (!file_exists($templateFile)) {
        die('Template file does not exist.');
    }
    $template = file_get_contents($templateFile);

    $template = str_replace('{{name}}', htmlspecialchars($_POST['name']), $template);
    $template = str_replace('{{username}}', htmlspecialchars($_POST['username']), $template);
    $template = str_replace('{{password}}', htmlspecialchars($_POST['password']), $template);

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'ahgase0071@gmail.com';
  $mail->Password = 'wytbwcwqzvnfjnsk';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('ahgase0071@gmail.com','Thanlyin Technology University');

  $mail->addAddress($_POST['email']);

  $mail->isHTML(true);

  $mail->Subject = 'Thanlyin Technology University Admission Confirmation & Account Details';
    $mail->Body    = $template;                                
    $mail->AltBody = strip_tags($template); 

  $mail->send();

  echo
  "
  <script>
  alert('Email Sent Successfully');
  </script>


  ";

  $idno = $_POST['IDNO'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $redirectUrl = 'controller.php?action=update&IDNO=' . $idno . '&USERNAME=' . $username . '&PASSWORD=' . $password;
  header('Location: ' . $redirectUrl);
  exit();

}





 ?>