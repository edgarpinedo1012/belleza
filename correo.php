<?php
if(isset($_POST['enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['mensaje']) && ! 
    empty($_POST['correo'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST ['telefono'];
        $mensaje = $_POST['mensaje'];
        $correo = $_POST['correo'];
        $header = "From: aluminioestrella@example.com" . "\r\n";
        $header .= "Reply-To: aluminioestrella@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($correo,$telefono,$mensaje,$header);
        if ($mail) {
            echo "<h4>!Mail enviado exitosamente!</h4>";
        }
    }
}


