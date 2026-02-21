<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            body {
  background-color: lightblue;
}
        </style>
        
    </head>
    <body>
<?php 
require("mailscript/class.phpmailer.php");

//require("class.phpmailer.php");


if(isset($_GET['submit']))
{
 $name = $_GET['Name'];
 $mobile = $_GET['Mobile'];
$email = $_GET['Email'];
$subject = $_GET['Subject'];
$comment = $_GET['Comment'];

echo $name." ".$mobile." ".$email."".$subject."".$comment;

if($name!="" && $email!="" && $mobile!="" && $subject!="" && $comment!=""){
// Configuring SMTP server settings

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "account@powerofhammer.co.in";
$mail->Password = "";
$mail->setFrom('account@powerofhammer.co.in', 'webinfomis');
$mail->addAddress('', 'Receiver Name');
$mail->Subject = 'webinfomis contact';
$mail->IsHTML(true);
$mail->Body="Customer Name--".$name."<br> Contact Number----".$mobile."<br>Customer Email".$email."<br>Subject---".$subject."<br> Contact Number----".$comment;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

// Success or Failure
if (!$mail->send()) {
    echo "error";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent<br>we will contact you soon.';
}

}
}
 else{
echo 'Please enter valid data</p>';
}

?>
</body>
    </html>
