<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'ezequielmorales232@gmail.com'; 
    $subject = 'Inscripcion curso';
    $body = "Nombre y Apellido: $name\nTeléfono: $phone\nFecha de Nacimiento: $dob\n\nMensaje:\n$message";

    $headers = "From: pagina\r\n"; // Cambia 'no-reply@example.com' por una dirección válida

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito. A la brevedad nos comunicaremos contigo";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
