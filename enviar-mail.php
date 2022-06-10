<?php

// importamos todo lo necesario
use PHPMailer\PHPMailer\PHPMailer;

require_once('./libs/SMTP.php');
require_once('./libs/POP3.php');
require_once('./libs/OAuth.php');
require_once('./libs/PHPMailer.php');

// Constantes para la configuracion
define("EMAIL_HOST", "smtp.mailtrap.io");
define("EMAIL_USERNAME", "8aba630f0ba7e7");
define("EMAIL_PASS", "407377b27bbf2c");
define("EMAIL_SMTPSECURE", "tls");
define("EMAIL_PORT", 2525);
define("EMAIL_ADMIN", 'ddr-288a24@inbox.mailtrap.io');

// Obtenmos los valores del formularios
$subject = $_POST['subject'];
$message = $_POST['message'];

try {

    // Creamos el objeto PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    // Configuracion del servidor (obtenido de mailtrap)
    $mail->Host = EMAIL_HOST;
    $mail->Username = EMAIL_USERNAME;
    $mail->Password = EMAIL_PASS;
    $mail->SMTPSecure = EMAIL_SMTPSECURE;
    $mail->Port = EMAIL_PORT;

    // Indicamos el origen del correo
    $mail->setFrom(EMAIL_ADMIN);

    // Añadimos el destinatario (ahora mismo solo irá a mailtrap)
    $mail->addAddress("administrador@discoduroderoer.es");

    // Indicamos el asuento
    $mail->Subject  = $subject;

    // Indicamos que puede contener codigo html
    $mail->isHTML(true);

    // Mensaje del email
    $mail->Body     = $message;

    // Enviamos el email, nos indicará si se envio o no
    if ($mail->send()) {
        echo "Se ha enviado el correo correctamente";
    } else {
        echo "No se ha enviado el correo correctamente";
    }
} catch (Exception $e) {
    echo "Error: {$e->ErrorInfo}";
}
