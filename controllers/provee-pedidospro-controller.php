<?php
//Inicializacion de la sesion activa
session_start();

//Inclusion del archivo "Model" de la base de datos.
include("../models/proveedor-model.php");

try {
    if (isset($_SESSION["rfc"])) {

        $ObjectProveedor = new Proveedor();

        $id_Sesion = $ObjectProveedor->IdCuenta($_SESSION['rfc']);

        $entregas = $ObjectProveedor->showPedidosCursoP($id_Sesion);
        $almacen = $ObjectProveedor->showSolAccsAlmacenP($id_Sesion);
        $reportes = $ObjectProveedor->showReportsPedidosP($id_Sesion);
        $entregados = $ObjectProveedor->showEndPedidosP($id_Sesion);


        require("../views/provee-pedipro-view.php");
    } else {
        echo "<script>location.href = './'</script>";
    }
} catch (\Throwable $th) {
    echo $th;
    echo "<script>location.href = './'</script>";
}