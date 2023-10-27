<?php
//Inicializacion de la sesion activa actualmente
session_start();

//Implementacion del model
include('../models/proveedor-model.php');

//Try catch que controlara el flujo del codigo y que atrapara cualquier error que se presente durante este
try {
    //Se valida que haya una sesion activa
    //if (isset($_SESSION["rfc"])) {
    //Se obtendran las variables necesarias para llevar acabo el flujo del script
    $accions = $_GET['accions']; //Variable para saber que se va a hacer
    $ObjectProveedor = new Proveedor(); //Instanciamiento de la clase Home (Modal)


    switch ($accions) {
        case 'AceptarPedido': //En caso de que sea una creacion de un nuevo pedido ejecutar lo siguiente
            $fecha_entrega = date('Y-m-d', strtotime($_POST['fechaEntrega']));
            $numero_pedido = $_GET['pedido'];
            $AceptarPedido = $ObjectProveedor->PedidosxSurtir($numero_pedido, $fecha_entrega);
            if ($AceptarPedido == true) {
                sleep(3);
                echo "<script>alert('Pedido tomado correctamente.')</script>";
                echo "<script>location.href='./Orders'</script>";
            } else {
                sleep(3);
                echo "<script>alert('Ups algo no salio como debia, intentalo mas tarde.')</script>";
                echo "<script>location.href='./Orders'</script>";
            }
            break;

        case 'DeclinarPedido': //En caso de que sea una creacion de un nuevo pedido ejecutar lo siguiente
            $numero_pedido = $_GET['pedido'];
            $DeclinarPedido = $ObjectProveedor->PedidosxSurtirDeclinar($numero_pedido);
            if ($DeclinarPedido == true) {
                sleep(3);
                echo "<script>alert('Pedido no aceptado correctamente.')</script>";
                echo "<script>location.href='./Orders'</script>";
            } else {
                sleep(3);
                echo "<script>alert('Ups algo no salio como debia, intentalo mas tarde.')</script>";
                echo "<script>location.href='./Orders'</script>";
            }
            break;

        case 'Programar': //Cuando el proveedor concrete el pedido se realizara la actualizacion de informacion
            $numero_pedido = $_GET['pedido'];
            $comentarios_entrega = $_POST['comentarios_entrega'];
            $dias_credito = $_POST['diascredito'];
            $fecha_pago = $_POST['fechapago'];
            $factura = $_FILES['FacturaPDF']['name'];

            $programar = $ObjectProveedor->PedidosxSurtirProgramar($numero_pedido, $dias_credito, $fecha_pago, $factura, $comentarios_entrega);
            $factura = $ObjectProveedor->subirFactura('FacturaPDF', '../assets/archives/dir_facturas/');

            if ($programar != false && $factura != false) {
                sleep(3);
                echo "<script>alert('Acuerdo de pedido concretado correctamente.')</script>";
                echo "<script>location.href='./Schedule'</script>";
            } else {
                sleep(3);
                echo "<script>alert('Pedido no aceptado correctamente.')</script>";
                echo "<script>location.href='./Schedule'</script>";
            }
            break;

        case 'entrega': //Cuando el proveedor necesite actualizar el estado de la entrega del pedido
            $estado_entrega = $_POST[''];
            $comentarios_entrega = $_POST[''];
            if ($ObjectProveedor->ActualizarEstadoEnvio($estado_entrega, $comentarios_entrega) != false) {
                sleep(3);
                echo "<script>alert('Actualizacion de estado correcto.')</script>";
                echo "<script>location.href='./Supplier'</script>";
            } else {
                sleep(3);
                echo "<script>alert('La actualizacion no fue posible.')</script>";
                echo "<script>location.href='./Supplier'</script>";
            }
            break;
    }
    //} else {
    //  echo "<script>location.href='./'</script>";
    //}
} catch (\Throwable $th) {
    if (isset($_SESSION["rfc"])) {
        echo "<script>alert('Ups!, ha ocurrido un error...505 " . $th . "')</script>";
        sleep(3);
        echo "<script>location.href='./OrderManager'</script>";
    } else {
        echo "<script>alert('Ups!, ha ocurrido un error...505 " . $th . "')</script>"; //POR ELIMINAR
        sleep(3);
        echo "<script>location.href='./'</script>";
    }
}
