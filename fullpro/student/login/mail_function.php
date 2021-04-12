<?php	
	function sendOTP($email,$new_password) {
		require('/usr/share/php/libphp-phpmailer/class.PHPMailer.php');
		require('/usr/share/php/libphp-phpmailer/class.SMTP.php');
	
		$message_body = "your password has been updated to " .$new_password;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "koenigseggdummy@gmail.com";
		$mail->Password = "snict123";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("koenigseggdummy@gmail.com", "web");
		$mail->AddAddress($email);
		$mail->Subject = "Password updated sucessfully..!!";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$mail->Send();
		
		
	}
?>