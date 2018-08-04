<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	//Load Composer's autoloader
	require 'vendor/autoload.php';
	
	
		$to = "thepartyexpert@gmail.com";
		$from = $_REQUEST['email'];
		$name = $_REQUEST['name'];
		$adults = $_REQUEST['adults'];
		$kids = $_REQUEST['kids'];
		$beds = $_REQUEST['beds'];
		$cots = $_REQUEST['cots'];
		$sits = $_REQUEST['sits'];
		$number = $_REQUEST['number'];
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		//Server settings
		// $mail->SMTPDebug = 1;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		// $mail->isMail();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'kastm0t21@gmail.com';                 // SMTP username
		$mail->Password = 'baluga21042194';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
	
		//Recipients
		$mail->setFrom($to, $name);
	
		$mail->addAddress($to);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		//Content
		$body = "<html>
        <body>
            Name: <b>$name</b> <br/><br/>
            Email: <b>$from</b> <br/><br/>
            Amount of Adults: <b>$adults</b> <br/><br/>
            Amount of kids and ages: <b>$kids</b> <br/><br/>
            Do you prefer a king size room or double beds: <b>$beds</b> <br/><br/>
            Do you need additional cots or cribs: <b>$cots</b> <br/><br/>
            Any preference in seating arrangement: <b>$sits</b> <br/><br/>
            Best Callback Number: <b>$number</b> <br/>
        </body>
        </html>";
		
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Reservation';
		$mail->Body    = $body;
		// $mail->AltBody = strip_tags($cmessage);
	
		$mail->send();
		// echo '<script>
		// 	alert("Message has been sent");
		// 	window.location.replace("http://localhost/partycaterers/reserve.html")
		// </script>';
		echo '<script>
			alert("Message has been sent");
			window.location.replace("http://partyexpertgetaways.ml/partycaterers/reserve.html")
		</script>';
		// echo '<script>
		// 	alert("Message has been sent");
		// 	window.location.replace("http://localhost/partycaterers/reserve.html")
		// </script>';
	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}

    // $headers = "From: $from";
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "Reservation";

    // $logo = '#';
    // $link = '#';

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";

    // $send = mail($to, $subject, $body, $headers);

?> 