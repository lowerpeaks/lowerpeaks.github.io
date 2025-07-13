<?php
		
		$userName		= $_POST['name'];
		$userEmail		= $_POST['email'];
		$userMessage	= $_POST['message'];


		$to 			= "lowerpeaks@gmail.com";
		$subject 		= "Email from lowerpeaks.com";
		$body 			= "Information submitted";
		
		/* $body .= "\r\n Name: " . $userName;
		$body .= "\r\n Email: " . $userEmail;
		$body .= "\r\n Message: " . $userMessage;

		$headers		= 'From: Justin de la Cruz <justindlc@gmail.com>' . "\r\n" . 'Reply-To: justindlc@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $body);
		echo '<script>window.location = "http://justindelacruz.com" </script>';
		exit(); */

?>