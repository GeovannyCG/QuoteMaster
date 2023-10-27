<?php
error_reporting(0);

session_start();

$sessionn = $_SESSION['rfc'];

// Inclusión del archivo "model" del login que contiene la definición de la clase "Login" para realizar la validación del inicio de sesión.
require('../models/home-model.php');

try {
    if (isset($sessionn)) {
        // Crea una instancia del objeto "Login".
        $HomeObject = new Home();
        // Llama al método "validationUser()" de la clase "Login" para validar el inicio de sesión.
        // Se le pasan como argumentos el correo electrónico (email) y la contraseña (password) proporcionados por el usuario.
        $showingPricescheking = $HomeObject->showPricesChecking();
        $showingPricesacepted = $HomeObject->showPricesAcepted();
        $showingPricesdecline = $HomeObject->showPricesDecline();

        $executeVerifyModel = $HomeObject->verifyCredentials($sessionn);
        require('../views/home-view.php');
    } else {
        echo "<script>location.href='./'</script>";
    }
} catch (\Throwable $th) {
    // En caso de que se genere un error durante la ejecución, redirecciona a la ventana de error interno del servidor.
    // echo "<script>location.href='../Error-Internal/'</script>";
    echo "Lo sentimos, algo no salio bien " . $th;
}
