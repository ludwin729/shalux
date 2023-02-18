<?php
require("class.phpmailer.php");
require("utils.php");

$name=isset($_REQUEST['first_name'])?trim($_REQUEST['first_name']):"";
$email=isset($_REQUEST['rut'])?trim($_REQUEST['rut']):"";
$email=isset($_REQUEST['empresa'])?trim($_REQUEST['empresa']):"";
$email=isset($_REQUEST['ciudad'])?trim($_REQUEST['ciudad']):"";
$email=isset($_REQUEST['email_address'])?trim($_REQUEST['email_address']):"";
$phone=isset($_REQUEST['phone_number'])?trim($_REQUEST['phone_number']):"";
$message=isset($_REQUEST['message'])?trim($_REQUEST['message']):"";

$completado=false;
$mensaje="";

if(!empty($name) && !empty($rut)&& !empty($empresa)&& !empty($ciudad)&& !empty($email_address)&& !empty($phone_number) && validar_email($email)){

    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);

    $mail = new PHPMailer();

    $mail->AddReplyTo("ventas@shaluxlighting.com", 'ShaLux Lighting');
    $mail->SetFrom("ventas@shaluxlighting.com", 'ShaLux Lighting');

    $mail->AddAddress('inversioneslosreyes@gmail.com', 'Luis Reyes');
    $mail->AddAddress('ibssenrs@gmail.com', 'Ibsen Reyes');
    $mail->AddAddress('ventas@shaluxlighting.com', 'Contacto ShaLux Lighting');

    $mail->Subject = "ShaLux Lighting - Contacto: ".sanear_string(mb_strtoupper($name,'utf-8'));
    $mail->Body = strtr(file_get_contents($path.'/templateEmail.html'),

        array('%persona%' => $nombre, '%ruc%' => $ruc, '%empresa%' => $empresa,'%ciudad%' => $ciudad,'%email%' => $email, '%telefono%' => $telefono, '%mensaje%' => $mensaje));

    $mail->IsHTML(true);
    $mail->CharSet="UTF-8";

    $mail->Send();

    $completado=true;
}else{
    $mensaje="Complete los campos obligatórios correctamente.";
}

echo json_encode(array('completado'=>$completado, 'mensaje'=>$mensaje));


?>