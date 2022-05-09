<?php
	require('assets/phpmailer/class.phpmailer.php');
	require('assets/phpmailer/class.smtp.php');

	$mail = new phpmailer();
	$mail->SMTPSecure = "tls";
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "CUENTA EMAIL REMITENTE";
	$mail->Password = "PASS";
	$mail->Port = 587;
	$mail->AddAddress("CUENTA EMAIL RERMITENET");
	$mail->MsgHTML('Recibiste una consulta desde krakushotel.com.ar <br> 
												<h3>Datos del Contacto:</h3><br>
												Nombre:'.$_POST['name'].'<br> 			
												Email: '.$_POST['email'].'<br> 
												Telefono: '.$_POST['telefono'].'<br>
												Check in: '.$_POST['checkin'].'<br>
												Check out: '.$_POST['checkout'].'<br>
												Cantidad Adultos: '.$_POST['adultos'].'<br>
												Cantidad Menores: '.$_POST['menores'].'<br>
											<br> 
											<h3>Consulta:</h3><br> '.$_POST['message'].'<br>');
	$mail->SetFrom($_POST['email'], "Nueva Consulta Sitio Web (".$_POST['name'].")");
	$mail->Subject = "Consulta desde la Web Krakushotel.com.ar / (".$_POST['name'].")";
	$exito = $mail->Send();

	header("Location: mensaje_enviado.php?".$exito);
?>