<?php
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

//include required phpmailer files

require('includes/PHPMailer.php');
require('includes/SMTP.php');
require('includes/Exception.php');
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//create a instance phpmailer
$mail = new PHPMailer();
//set mailer to use smtp
$mail->isSMTP();
//define smtp host
$mail->Host = "smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth = "true";
//set type of encryption (ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail user
$mail->Username = "sajjadlaghari723@gmail.com";
//set gmail password
$mail->Password = "Sajjadjan1234";
//set gmail subject
$mail->Subject = "Customer Feedback";
//set sender email
$mail->setFrom("sajjadlaghari723@gmail.com");
//email body
$mail->Body = $feedback;
//add recipient
$mail->addAddress($email);
//finaly send email
$mail->send();
//closing smtp connection
if($mail->Send())
{
  $msg = "Email Sent";
}
else
{
    $msg = "Error";
}
$mail->smtpClose();
?>

<!DOCTYPE html>
<html>
<head>
<title>Laghari Motor's Showroom Feedback Submitted</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body style="background-color:rgba(0,0,0,0.2)">

<div class="container-fluid text-center">
    <h1 style='font-size:65px; margin-top:16%;'>Feedback submitted</h1>
    <p style="font-size:40px; font-weight:bold;">Your feedback has been sent form email <?php echo $email?>.</p>
    <?php 
    if($msg=='Error'){?>
        <p style="font-size:20px; font-weight:bold; color:red"><?php 
           echo $msg?></p>
<?php
     }?>
     <?php 
    if($msg=='Email Sent'){?>
        <p style="font-size:20px; font-weight:bold; color:green"><?php 
           echo $msg?></p>
<?php
     }?>
     </div>
</body>
</html>