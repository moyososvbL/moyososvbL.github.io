<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; 
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
	    $mail = new PHPMailer(true);

	        $mail->isSMTP();
	        $mail->Host = 'smtp.gmail.com';
		    $mail->SMTPAuth = true;
		    $mail->Username = 'codecrafter530@gmail.com';
		        $mail->Password = 'txxskgpljmskkawe';
		        $mail->SMTPSecure = 'ssl';
			    $mail->Port = 465; 

			    $mail->setFrom('codecrafter530@gmail.com', "Codecrafter");

			        $mail->addAddress('codecrafter530@gmail.com');

			        $mail->isHTML(true);

				    $mail->Subject = $_POST["subject"];
				    $mail->Body = $_POST["message"] . "\n" . $_POST["email"];

				        $mail->send();

				        echo
						    "
    <script>
        alert('sucessful');
        document.location.href = 'index.php'
    </script >

    ";

} 

?>
