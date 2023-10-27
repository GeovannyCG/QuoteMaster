<?php
error_reporting(0);
//Se inicializa la variable de sesion
session_start();

// Se valida si hay una sesion activa
if (isset($_SESSION['rfc'])) {
    echo "<script>location.href='./Home'</script>";
} else {
    echo "<script>location.href='./Login'</script>";
}
?>