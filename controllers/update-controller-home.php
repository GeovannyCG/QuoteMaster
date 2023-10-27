<?php
error_reporting(0);

session_start();

$sessionn = $_SESSION['rfc'];

// Inclusión del archivo "model" del login que contiene la definición de la clase "Login" para realizar la validación del inicio de sesión.
require('../models/home-model.php');

try {
    if (isset($sessionn)) {
        //Se obtiene el id del usuario por la URL
        $id = $_GET['id_price'];

        // Crea una instancia del objeto "Login".
        $HomeObject = new Home();
        // Llama al método "validationUser()" de la clase "Login" para validar el inicio de sesión.
        // Se le pasan como argumentos el correo electrónico (email) y la contraseña (password) proporcionados por el usuario.
        $updatePrice = $HomeObject->showPriceEspesific($id);

        // $executeVerifyModel = $HomeObject->verifyCredentials($sessionn);
        require('../views/update-view-home.php');
    } else {
        echo "<script>location.href='./Home'</script>";
    }
} catch (\Throwable $th) {
    // En caso de que se genere un error durante la ejecución, redirecciona a la ventana de error interno del servidor.
    // echo "<script>location.href='../Error-Internal/'</script>";
    echo "Lo sentimos, algo no salio bien " . $th;
}
