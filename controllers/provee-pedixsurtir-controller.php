<?php
session_start();
include('../models/proveedor-model.php');

try {
    if (isset($_SESSION['rfc'])) {
        $ObjectProveedor = new Proveedor();
        $id_Sesion = $ObjectProveedor->IdCuenta($_SESSION['rfc']);
        $pedidosP = $ObjectProveedor->showPedidosP($id_Sesion);
        require('../views/provee-pedixsur-view.php');
    } else {
        echo "<script>location.href = './'</script>";
    }
} catch (\Throwable $th) {
    echo $th;
}
