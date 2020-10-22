<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre es requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email es requerido ";
} else {
    $email = $_POST["email"];
}

// MSG 
if (empty($_POST["msg"])) {
    $errorMSG .= "Mensaje es requerido ";
} else {
    $msg = $_POST["msg"];
}


// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Telefono es requerido ";
} else {
    $phone = $_POST["phone"];
}



$EmailTo = "nicolaschamorro@cisde.co";
$Subject = "Nuevo mensaje recibido";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $msg;
$Body .= "\n";
$Body .= "phone: ";
$Body .= $phone;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
    echo "Enviado";

}else{
    if($errorMSG == ""){
        echo "Ocurrio un error:(";
    } else {
        echo $errorMSG;
    }
}

?>