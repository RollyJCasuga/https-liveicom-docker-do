<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'register@livei.com';                     // SMTP username
    $mail->Password   = 'Baguio2020';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('register@livei.com', 'Livei.com');
    $mail->addAddress($email);
    
         // Add a recipient
         // Add a recipient
	// <button type="submit" style="background-color: #668d3c; color: white; padding: 12px 20px; margin: 8px 0; border: none;cursor: pointer; width: 200px; border-radius: 5px; font-size: 16px;">Verify my email</button>    

   $link = "livei.com/version2/verify.php?vkey=$vkey";
  

    $body = '<div style="font-family: Arial; color: Black; background-color: rgba(255,255,255,0.3); border-radius: 3px; width: 100%;margin-right: auto; margin-left: auto; padding-top: 20px;">
        <div style="text-align: center; width: 80%; margin-right: auto; margin-left: auto;">
            <img style="width: 200px; height: 70px" src="https://livei.com/phpmailer/mailLogo.png">
            <h1>Verify your email address</h1>
            <h3>Hi '.$firstname.'!</h3>
            <p>Please confirm that you want this as your Livei.com account email address by clicking the button below:</p>
            <a href="https://livei.com/register/verify.php?vkey='.$vkey.'">
              <button style="height: 40px; background-color: #668d3c; color: white;border: none;cursor: pointer; width: 200px; border-radius: 5px; font-size: 16px;">Verify my email</button>
            </a>
            <p>Or by clicking the link below:</p>
            <a href="https://livei.com/register/verify.php?vkey='.$vkey.'">https://livei.com/verify.php?vkey='.$vkey.'</a>

        </div>
	</div>;';
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Confirm your account on Livei.com';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();


    //echo 'Please check your email to verify your account!';
} catch (Exception $e) {
    echo "Verification could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


