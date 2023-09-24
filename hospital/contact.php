
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAX HEAVEN.COM</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    
    <section class="contact">
        <div class="contact-form">
            <h1> <span>Contact Us</span></h1>
          
            <form action="" method="post">
                <input type="text"  name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="subject" name="subject" placeholder="Write a Subject" required>
                <textarea name="msg" id="" cols="10" rows="4" placeholder="Your Message" required>

                </textarea>
                <input type="submit" name="send" value="submit" class="btn">
            </form>
        </div>
    
    </section>
</body>
</html>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
//Load Composer's autoloader
require 'php mailer/Exception.php';
require 'php mailer/PHPMailer.php';
require 'php mailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mrcaptan571@gmail.com';                     //SMTP username
    $mail->Password   = 'hdrlslcvffybotmd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mrcaptan571@gmail.com', 'contact us');
    $mail->addAddress('mrcaptan571@gmail.com', 'VAX HEAVEN.COM');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'VAX HEAVEN.COM';
    $mail->Body    = "Sender Name - $name <b> Sender Email -$email <b> Subject - $subject <b> And Message - $msg ";
   

  $mail->send();
    echo '';
} catch (Exception $e) {
    echo '<script>alert("your account is still pending")</script>';
    // echo " {$mail->ErrorInfo}";
}
}
?>