<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["message"];
    $asunto = $_POST["asunto"];
    $para = "ditrayolmu@gufum.com"; // Reemplaza con la dirección de correo de destino
    $asunto = "$asunto";

    $cuerpo = "Name: " . $_POST["nombre"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Message: " . $_POST["message"] . "\r\n";

    $cabeceras = "From: $email\r\n";
    $cabeceras .= "Reply-To: $email\r\n";
    $cabeceras .= "X-Mailer: PHP/" . phpversion();
    
    if (mail($para, $asunto, $mensaje, $cabeceras)) {
    } else {
        echo "Error al enviar el correo.";
    }

    echo "Correo enviado exitosamente."; 
}
?>