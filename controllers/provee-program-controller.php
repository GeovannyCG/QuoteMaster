<?php
session_start();
include('../models/proveedor-model.php');

try {
    if (isset($_SESSION['rfc'])) {
        $ObjectProveedor = new Proveedor();
        $id_Sesion = $ObjectProveedor->IdCuenta($_SESSION['rfc']);
        $dias_credito = $ObjectProveedor->DiasCredito($id_Sesion);
        $pedidos_programar = $ObjectProveedor->showPedidosProgramar($id_Sesion);
        require('../views/provee-program-view.php');
    } else {
        echo "<script>location.href = './'</script>";
    }
} catch (\Throwable $th) {
    echo $th;
}
