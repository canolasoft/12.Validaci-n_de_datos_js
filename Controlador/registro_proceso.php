<?php

$nombre = $_POST['nombre'];
$email = $_POST["email"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];

if ($nombre == "" || $email == "" || $pass == "") {
    echo "Completa todos los datos";
    return;
} else if (strlen($pass) < 8) {
    echo "La contraseña debe tener al menos 8 caracteres";
    return;
} else if ($pass != $pass2) {
    echo "Las contraseñas no coinciden";
    return;
}

echo "Validación de datos correcta: <br>";
echo "El nombre ingresado es: " . $nombre . "<br>";
echo "El email ingresado es: " . $email . "<br>";
echo "La contraseña ingresada es: " . $pass . "<br>";

?>
