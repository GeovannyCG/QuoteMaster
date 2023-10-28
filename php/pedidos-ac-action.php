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

            case 'accesoalmacen': //Para el control de los accesos y estados del almacen ademas de reportes

                //Variables para el estado del almacen
                $id_pedido = $_GET['numero_pedido'];
                $id_proveedor = $_GET['numero_proveedor'];
                $estado_p = $_POST['estado_almacen'] ?? '';
                $comentarios_p = $_POST['comentarios_acceso_almacen'];

                //Datos del formulario de reportes
                $motivo_r = $_POST['motivo'] ?? '';
                $cantidad_p_r = $_POST['cantidad_p'] ?? '';
                $cantidad_r_r = $_POST['cantidad_r'] ?? '';
                $devueltos = $_POST['devueltos_r'] ?? '';
                $observaciones_r = $_POST['comentarios_reportes_almacen'] ?? '';

                if ($estado_p == null) {
                    $estado_p = 'retenido';
                } else {
                    $estado_p = $_POST['estado_almacen'] ?? '';
                }
                $ActualizarEstado = $ObjectHome->ControlAlmacen($id_pedido, $estado_p, $comentarios_p);
                $CrearReporte = $ObjectHome->Reporte($id_pedido, $motivo_r, $cantidad_p_r, $cantidad_r_r, $devueltos, $observaciones_r, $id_proveedor);

                if ($motivo_r != null) {
                    if ($ActualizarEstado != true || $CrearReporte != true) {
                        sleep(3);
                        echo "<script>alert('Ups algo no salio como debia, el reporte no se pudo hacer correctamente.')</script>";
                        echo "<script>location.href='./OrderManager'</script>";
                    } else {
                        sleep(3);
                        echo "<script>alert('Actualizacion y reportes enviados correctamente.')</script>";
                        echo "<script>location.href='./OrderManager'</script>";
                    }
                } else {
                    if ($ActualizarEstado != true) {
                        sleep(3);
                        echo "<script>alert('Ups algo no salio como debia, el reporte no se pudo hacer correctamente.')</script>";
                        echo "<script>location.href='./OrderManager'</script>";
                    } else {
                        sleep(3);
                        echo "<script>alert('Actualizacion realizacion')</script>";
                        echo "<script>location.href='./OrderManager'</script>";
                    }
                }

                echo "<script>location.href='./OrderManager'</script>";

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
