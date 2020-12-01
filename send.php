<?php
$nombre = $_POST["name"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$area = $_POST["area"];
$message = $_POST["message"];

echo $nombre, $email, $telefono, $area, $message;

$para = "vladlinets@icloud.com";

if(mail($para, $nombre, $email, $telefono, $area, $message)){
    echo "mail enviado";
}else{
    echo "Fallo";
}

?>