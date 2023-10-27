<?php
session_start();
include('../models/proveedor-model.php');

try {
    //if (isset($_SESSION['rfc'])) {
        $ObjectProveedor = new Proveedor();
        $pedidosP = $ObjectProveedor->showPedidosP(43);
        require('../views/provee-pedixsur-view.php');
    //}
} catch (\Throwable $th) {
    echo $th;
}
