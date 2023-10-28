<?php
error_reporting(0);
//Se inicializa la variable de sesion
session_start();

// include('./models/login-model.php');

// $ObjectLogin = new Login();

// Se valida si hay una sesion activa
if (isset($_SESSION['rfc'])) {
    // $ObjectLogin->SesionReanudar($_SESSION['rfc']);
    echo "<script>location.href='./Supplier'</script>";
} else {
    echo "<script>location.href='./Login'</script>";
}
?>