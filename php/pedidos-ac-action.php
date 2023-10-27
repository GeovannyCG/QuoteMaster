<?php
//Inicializacion de la sesion activa actualmente
session_start();

//Implementacion del model
include('../models/home-model.php');

//Try catch que controlara el flujo del codigo y que atrapara cualquier error que se presente durante este
try {
    //Se valida que haya una sesion activa
    if (isset($_SESSION["rfc"])) {
        //Se obtendran las variables necesarias para llevar acabo el flujo del script
        $accions = $_GET['accion']; //Variable para saber que se va a hacer
        $ObjectHome = new Home(); //Instanciamiento de la clase Home (Modal)


        switch ($accions) {
            case 'crearpedido': //En caso de que sea una creacion de un nuevo pedido ejecutar lo siguiente
                echo "<script>alert('Si ejecuta')</script>";
                $proveedor = $_POST['proveedor'];
                $nombreProyecto = $_POST['proyecto'];
                $xml = $_FILES['xml']['name'];
                $observaciones = $_POST['observaciones_s_p'];

                $crearPediodo = $ObjectHome->CrearPedido($proveedor, $nombreProyecto, $xml, $observaciones);
                $subirXML = $ObjectHome->subirXML('xml', '../assets/archives/dir_xml/');

                if ($crearPediodo == true && $subirXML == true) {
                    sleep(3);
                    echo "<script>alert('Pedido solicitado al proveedor correctamente.')</script>";
                    echo "<script>location.href='./OrderManager'</script>";
                } else {
                    sleep(3);
                    echo "<script>alert('Ups algo no salio como debia, intentalo mas tarde.')</script>";
                    echo "<script>location.href='./OrderManager'</script>";
                }
                break;

            case 'actualizarpedido': //Cuando se busca hacer la actualizacion de informacion de un pedido
                $proveedorA = $_POST['proveedorAc'];
                $nombreProyectoA = $_POST['proyectoAc'];
                $observacionesA = $_POST['observaciones_s_pAc'];
                $xmlAN = $_FILES['xmlAc']['name'];

                $numero_pedido = $_GET['numero_pedido'];
                $nombre_xml_antiguo = $_GET['xml'];

                echo "<script>alert('" . $xmlAN . "')</script>";

                $actualizarPedido = $ObjectHome->ActualizarPedido($numero_pedido, $nombreProyectoA, $observacionesA, $proveedorA);

                if ($xmlAN != null) {
                    $actualizarXML = $ObjectHome->ActualizarXML($nombre_xml_antiguo, 'xmlAc', '../assets/archives/dir_xml/', $numero_pedido, $xmlAN);
                }

                if ($actualizarPedido == true || ($actualizarPedido == true && $actualizarXML == true)) {
                    sleep(3);
                    echo "<script>alert('Pedido Actualizado al proveedor correctamente.')</script>";
                    echo "<script>location.href='./OrderManager'</script>";
                } else {
                    sleep(3);
                    echo "<script>alert('Ups algo no salio como debia, intentalo mas tarde.')</script>";
                    echo "<script>location.href='./OrderManager'</script>";
                }
                break;

            case 'eliminarpedido': //En caso de que el usuario desee cancelar/eliminar un pedido 
                $id_pedido = $_GET['numero_pedido'];
                $xml = $_GET['xml'];


                $EliminarRegistro = $ObjectHome->EliminarPedido($id_pedido);
                $EliminarArchivos = $ObjectHome->EliminarXML($xml, '../assets/archives/dir_xml/');

                if ($EliminarRegistro != true || $EliminarArchivos != true) {
                    sleep(3);
                    echo "<script>alert('Ups algo no salio como debia, intentalo mas tarde.')</script>";
                    echo "<script>location.href='./OrderManager'</script>";
                } else {
                    sleep(3);
                    echo "<script>alert('El pedido ha sido cancelado correctamente.')</script>";
                    echo "<script>location.href='./OrderManager'</script>";
                }
                break;

            default:
                # code...
                break;
        }
    } else {
        echo "<script>location.href='./'</script>";
    }
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
