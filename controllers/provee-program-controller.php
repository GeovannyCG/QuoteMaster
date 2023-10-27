<?php
session_start();
include('../models/proveedor-model.php');

try {
    //if (isset($_SESSION['rfc'])) {
        $ObjectProveedor = new Proveedor();
        $dias_credito = $ObjectProveedor->DiasCredito(43);
        $pedidos_programar = $ObjectProveedor->showPedidosProgramar(43);
        require('../views/provee-program-view.php');
    //}
} catch (\Throwable $th) {
    echo $th;
}
