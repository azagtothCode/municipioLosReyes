<?php
    header('Location: '."../index.html");

    function mailAtencionCiudadana($correoRem,$cuerpoMsg){
        $from = $correoRem;
        $to = "atencionciudadana@losreyeslapaz.gob.mx";
        $subject = "Atención Ciudadana";
        $message = $cuerpoMsg;
        $headers = "Correo recibido por parte de: " . $from;
        mail($to,$subject,$message, $headers);
    }

    function mailFormContacto($nameRem,$mailRem,$telRem,$msgRem){
        $from = $correoRem;
        $to = "atencionciudadana@losreyeslapaz.gob.mx";
        $subject = "Formulario Contacto";
        $message = $msgRem;
        $headers = "Datos de Remitente: " . " | Nombre: " . $nameRem . " | Correo Electronico: " . $mailRem . " | Telefono: " . $telRem;
        mail($to,$subject,$message, $headers);
    }

    if($_POST["mailUser"]!=null && $_POST["bodyMsg"]!=null){
        mailAtencionCiudadana($_POST["mailUser"],$_POST["bodyMsg"]);
    }

    if($_POST["mailUserContact"]!=null && $_POST["bodyMsgContact"]!=null){
        if($_POST["telUserContact"]==null||$_POST["nameUserContact"]==null){
            $_POST["telUserContact"]="N/A";
            $_POST["nameUserContact"]="Anonimo";
        }
        mailFormContacto($_POST["nameUserContact"],$_POST["mailUserContact"],$_POST["telUserContact"],$_POST["bodyMsgContact"]);
    }
?>