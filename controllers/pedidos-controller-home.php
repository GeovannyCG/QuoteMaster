<?php
//Inicializacion de la sesion activa
session_start();

//Inclusion del archivo "Model" de la base de datos.
include("../models/home-model.php");

try {
    if (isset($_SESSION["rfc"])) {

        $HomeModel = new Home();

        $verificar = $HomeModel->verifyCredentials($_SESSION['rfc']);
        $proveedores = $HomeModel->showSuppilers();
        $solicitudPedidos = $HomeModel->showPedidos();

        require("../views/pedidos-view-home.php");
    } else {
        echo "<script>location.href = './'</script>";
    }
} catch (\Throwable $th) {
    echo "<script>location.href = './'</script>";
}