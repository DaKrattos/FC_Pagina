<?php
	
	$conn = mysqli_connect('CaFlorDir.db.10645353.hostedresource.com','CaFlorDir','CaFlor1@','CaFlorDir') or die('No Se Puede Accesar a La Base de Datos.');

    $query = "Select * From Directory" or die("Error En La Consulta.");
	$result = mysqli_query($conn,$query);
	
	while($row = mysqli_fetch_array($result))
	{
	    //echo "Hola!";
        echo $row['Code'].'.'.$row['Email1'].'<br/>';
	}
	
	/*	
	require './../Submodules/PHPMailer/PHPMailerAutoload.php';
	
	// Configuracion de Destinatario
		$dst_mail = 'Jhonny1309@hotmail.com';
		$dst_name = 'Jhonnathan Gutierrez';

	// Configuracion de Remitente
		$rmt_mail = 'info@floristeriacarino.com';
		$rmt_name = 'Cariño Floristeria';

	// Configuracion de SMTP
		$smtp_host = 'smtp-mail.outlook.com';
		$smtp_auth = true;
		$smtp_user = 'info@floristeriacarino.com';
		$smtp_pass = 'Leojonmar';
		$smtp_ncry = 'tls'; // 'ssl' o 'tls'
		$smtp_port = 587;
		
	// Configuracion de Correo
	    $mail_sub = "Correo de Prueba";
	    $mail_body = "Cuerpo del Correo";
	    
	
	
	// Creo Instancia de Correo
		$mail = new PHPMailer;

	// Parametrizo El Correo
		$mail->isSMTP();
		$mail->Host 		= $smtp_host;
		$mail->SMTPAuth 	= $smtp_auth;
		$mail->Username 	= $smtp_user;
		$mail->Password 	= $smtp_pass;
		$mail->SMTPSecure 	= $smtp_ncry;
		$mail->Port 		= $smtp_port;
		
		$mail->From 		= $rmt_mail;
		$mail->FromName 	= $rmt_name;
		
		$mail->addAddress($dst_mail,$dst_name);

		if(!empty($mail_att))
		{
			$mail->addAttachment($mail_att);
		}

		$mail->Subject 	= $mail_sub;
		$mail->Body 	= $mail_body;
		$mail->AltBody 	= 'Mensaje Alternativo';
		
		
		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		    unlink($mail_att);
		}
	*/
?>