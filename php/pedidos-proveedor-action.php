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

        case 'Entrega': //Cuando el proveedor necesite actualizar el estado de la entrega del pedido
            $numero_pedido = $_GET['pedido'];
            $estado_entrega = $_POST['estado_entrega'];
            $comentarios_entrega = $_POST['comentarios_entrega'];
            if ($ObjectProveedor->ActualizarEstadoEnvio($estado_entrega, $comentarios_entrega, $numero_pedido) != false) {
                sleep(3);
                echo "<script>alert('Actualizacion de estado correcto.')</script>";
                echo "<script>location.href='./Supplier'</script>";
            } else {
                sleep(3);
                echo "<script>alert('La actualizacion no fue posible.')</script>";
                echo "<script>location.href='./Supplier'</script>";
            }
            break;
        case 'actualizarperfil':
            //OBTENCION DE DATOS POR URL
            $id = $_GET['id'];
            $idFinal = $ObjectProveedor->IdCuenta($id);
            $nameOldFile1 = $_GET['file1'];
            $nameOldFile2 = $_GET['file2'];
            $nameOldFile3 = $_GET['file3'];

            //OBTENCION DE LOS DATOS POR FORMULARIO
            $type = $_POST['tipousuario'];
            $rfc = $_POST['rfc'];
            $curp = $_POST['curp'];
            $reason_social = $_POST['reasonsocial'];
            $option_one = $_POST['option1'];
            $option_two = $_POST['option2'];

            $const_fiscal = $_FILES['nose1'];
            $const_o_cump = $_FILES['nose2'];
            $const_cta_banc = $_FILES['nose3'];

            $const_fiscal1 = $_FILES['nose1']['name'];
            $const_o_cump1 = $_FILES['nose2']['name'];
            $const_cta_banc1 = $_FILES['nose3']['name'];

            $direct = $_POST['direction'];

            $name_vta = $_POST['namevtas'];
            $email_vta = $_POST['emailvtas'];
            $phone_vta = $_POST['phonevtas'];
            $mobile_vta = $_POST['mobilevtas'];

            $name_conta = $_POST['nameconta'];
            $email_conta = $_POST['emailconta'];
            $phone_conta = $_POST['phoneconta'];
            $mobile_conta = $_POST['mobileconta'];

            $name_cc = $_POST['namecyc'];
            $email_cc = $_POST['emailcyc'];
            $phone_cc = $_POST['phonecyc'];
            $mobile_cc = $_POST['mobilecyc'];

            $pass = $_POST['passsword'];
            $days_credit = $_POST['opcion'];

            $states = $_POST['option3'];

            //Creacion de la instaciamiento de la clase Home del model
            $exexuteAction = $ObjectProveedor->ActualizarPerfil($idFinal, $type, $rfc, $curp, $reason_social, $option_one, $option_two, $const_fiscal1, $const_o_cump1, $const_cta_banc1, $direct, $name_vta, $email_vta, $phone_vta, $mobile_vta, $name_conta, $email_conta, $phone_conta, $mobile_conta, $name_cc, $email_cc, $phone_cc, $mobile_cc, $pass, $days_credit, $states, $nameOldFile1, $nameOldFile2, $nameOldFile3);


            sleep(3);
            echo "<script>alert('Perfil actualizado correctamente.')</script>";
            echo "<script>location.href='./ProfileSupplier'</script>";

            break;
    }
    //} else {
    //  echo "<script>location.href='./'</script>";
    //}
} catch (\Throwable $th) {
    if (isset($_SESSION["rfc"])) {
        echo "<script>alert('Ups!, ha ocurrido un error...505 " . $th . "')</script>";
        sleep(3);
        echo "<script>location.href='./Orders'</script>";
    } else {
        echo "<script>alert('Ups!, ha ocurrido un error...505 " . $th . "')</script>"; //POR ELIMINAR
        sleep(3);
        echo "<script>location.href='./'</script>";
    }
}
