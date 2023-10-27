<?php
//Inicializacion de la sesion activa
session_start();

//Inclusion del archivo "Model" de la base de datos.
include("../models/proveedor-model.php");

try {
    //if (isset($_SESSION["rfc"])) {

        $ObjectProveedor = new Proveedor();

        $entregas = $ObjectProveedor->showPedidosCursoP(43);


        require("../views/provee-pedipro-view.php");
    //} else {
        //echo "<script>location.href = './'</script>";
    //}
} catch (\Throwable $th) {
    echo $th;
    // echo "<script>location.href = './'</script>";
}