<?php
require("../vendor/php_mailer/class.phpmailer.php");
require("utils.php");

$name=isset($_REQUEST['name'])?trim($_REQUEST['name']):"";
$email=isset($_REQUEST['email'])?trim($_REQUEST['email']):"";
$phone=isset($_REQUEST['phone'])?trim($_REQUEST['phone']):"";
$message=isset($_REQUEST['message'])?trim($_REQUEST['message']):"";

$completado=false;
$mensaje="";

if(!empty($name) && !empty($message) && validar_email($email)){

    $mail = new PHPMailer();

    $mail->AddReplyTo("ventas@rsconsorcioindustrial.com", 'RS CONSORCIO INDUSTRIAL®');
    $mail->SetFrom("ventas@rsconsorcioindustrial.com", 'RS CONSORCIO INDUSTRIAL®');

    $mail->AddAddress('ibssenrs@gmail.com', 'Ibssen Reyes');
     $mail->AddAddress('inversioneslosreyes@gmail.com', 'Luis Reyes');
      //$mail->AddAddress('ventas@corporacionsyl.com', 'Contacto Corporación S&L');

    $mail->Subject = "RS Consorcio Indutrial Peru ® - Contacto: ".sanear_string(mb_strtoupper($name,'utf-8'));
    $mail->Body = strtr(file_get_contents(dirname(__DIR__).'/inc/Email-Templates/contacto.html'),
        array('%persona%' => $name, '%telefono%' => $phone, '%email%' => $email, '%mensaje%' => $message));
    $mail->IsHTML(true);
    $mail->CharSet="UTF-8";

    $mail->Send();

    $completado=true;
}else{
    $mensaje="Complete los campos obligatórios correctamente.";
}

echo json_encode(array('completado'=>$completado, 'mensaje'=>$mensaje));



?>