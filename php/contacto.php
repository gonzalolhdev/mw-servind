<?php

if(isset($_POST['submit'])){
    
    $nombre = $_POST['name'];
    //$apellido = $_POST['surname'];
    $emailFrom = $_POST['email'];
    $asunto = $_POST['need'];
    $mensaje = $_POST['message'];

    $emailTo = "administracion@mw-servind.com.ar";
    $headers = "From: ".$emailFrom;
    $txt = "Recibiste un e-mail de ".$nombre.".\n\n".$mensaje;

    //echo $nombre.' - '.$apellido.' - '.$emailFrom.' - '.$asunto.' - '.$mensaje;

    mail($emailTo, $asunto, $txt, $headers);
    $emailTo = "administracion@mw-servind.com.ar";
    mail($emailTo, $asunto, $txt, $headers);
    $emailTo = "administracion@mw-servind.com.ar";
    mail($emailTo, $asunto, $txt, $headers);
    header("location: ./../index.php#contacto");
}
else{
    header("location: ./../index.php");
}