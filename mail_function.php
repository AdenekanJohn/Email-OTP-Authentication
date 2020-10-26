 <?php	
	function sendOTP($email,$otp) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail-> "IsSMTP()";
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587"; //465 if ssl
		$mail->Username = "hardenekan@gmail.com";
		$mail->Password = "SMTP Password";
		$mail->Host     = "stmp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom('hardenekan@gmail.com','John');
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>