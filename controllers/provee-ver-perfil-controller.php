<?php
//Inicializacion de la sesion activa
session_start();

//Inclusion del archivo "Model" de la base de datos.
include("../models/proveedor-model.php");

try {
    if (isset($_SESSION["rfc"])) {

        $ObjectProveedor = new Proveedor();
        $id_Sesion = $ObjectProveedor->IdCuenta($_SESSION['rfc']);

        $perfil = $ObjectProveedor->MostrarPeril($id_Sesion);


        require("../views/provee-profile-view.php");
    } else {
        echo "<script>location.href = './'</script>";
    }
} catch (\Throwable $th) {
    echo "<script>location.href = './'</script>";
}