

<?php
$con=mysqli_connect("localhost","nikita","1234niki","register");
mysqli_select_db($con,"register");
$email=$_REQUEST["email"];
$query=mysqli_query($con,"select * from users where email='$email'");
$row=   mysqli_fetch_array($query,MYSQLI_ASSOC);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
    //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "-----";
  $mail->Password = "------";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "iitkgpaspire@gmail.com";
  $mail->FromName = "nikita";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$row["pass"];
  $mail->AltBody = "This is the plain text version of the email content";
  if($mail->send()){
   echo "<br><b>Message has been sent successfully</b>";

  }
