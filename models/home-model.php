<?php
//Implementacion de la base de datos.
require('../config/connection-bd.php');

//Creacion de clase para este archivo PHP.
class Home
{
    //Variable que almacenara informacion de la conexion con la base de datos.
    private $connect;

    public function __construct()
    {
        $HomeObj = new Connection();
        $this->connect = $HomeObj->getConn();
    }

    //Funcion para extraer informacion de la base de datos
    public function showPricesChecking()
    {
        $queryPrices1 = "SELECT * FROM user_ffh WHERE state_u = 'cheking'";
        $ExqueryPrices1 = $this->connect->query($queryPrices1);
        $prices1 = array();
        while ($row1 = $ExqueryPrices1->fetch_assoc()) {
            $prices1[] = $row1;
        }
        return $prices1;
    }

    //Funcion para extraer informacion de la base de datos
    public function showPricesAcepted()
    {
        $queryPrices2 = "SELECT * FROM user_ffh WHERE state_u = 'acepted'";
        $ExqueryPrices2 = $this->connect->query($queryPrices2);
        $prices2 = array();
        while ($row2 = $ExqueryPrices2->fetch_assoc()) {
            $prices2[] = $row2;
        }
        return $prices2;
    }

    //Funcion para extraer informacion de la base de datos
    public function showPricesDecline()
    {
        $queryPrices3 = "SELECT * FROM user_ffh WHERE state_u = 'decline'";
        $ExqueryPrices3 = $this->connect->query($queryPrices3);
        $prices3 = array();
        while ($row3 = $ExqueryPrices3->fetch_assoc()) {
            $prices3[] = $row3;
        }
        return $prices3;
    }

    public function showAllPrices()
    {
        $queryPrices4 = "SELECT * FROM user_ffh";
        $ExqueryPrices4 = $this->connect->query($queryPrices4);
        $prices4 = array();
        while ($row4 = $ExqueryPrices4->fetch_assoc()) {
            $prices4[] = $row4;
        }
        return $prices4;
    }

    //Funcion para actualizar el estado de las cotizaciones
    public function Actions($id, $state)
    {
        $queryActions = "UPDATE user_ffh SET state_u = '$state' WHERE id_u = '$id'";
        $ExqueryActions = $this->connect->query($queryActions);
        if ($ExqueryActions) {
            return true;
        } else {
            return false;
        }
    }

    //Funcion para saber si el usuario logeado es admin o contador
    public function verifyCredentials($user)
    {
        $querVerify = "SELECT roll_uq FROM users_quote WHERE rfc_uq = '$user'";
        $ExquerVerify = $this->connect->query($querVerify);
        $row = $ExquerVerify->fetch_assoc();

        if ($row && $row['roll_uq'] == 'admin') {
            return true;
        } else {
            return false;
        }
    }

    //Funcion para actualizar los datos y archivos
    public function updatePrice($id, $type, $rfc, $curp, $reason_social, $option_one, $option_two, $const_fiscal1, $const_o_cump1, $const_cta_banc1, $direct, $name_vta, $email_vta, $phone_vta, $mobile_vta, $name_conta, $email_conta, $phone_conta, $mobile_conta, $name_cc, $email_cc, $phone_cc, $mobile_cc, $pass, $days_credit, $states, $nameOldFile1, $nameOldFile2, $nameOldFile3)
    {
        try {
            $fileUp1 = false;
            $fileUp2 = false;
            $fileUp3 = false;
            $queryMain = false;

            function ActualizarArchivos($nameOldFile, $name_Input, $dir_Archive)
            {
                //Se elimina el archivo antiguo si es que existe
                if (file_exists($dir_Archive . $nameOldFile)) {
                    if (!unlink($dir_Archive . $nameOldFile)) {
                        return false;
                    }
                }

                $target_file = $dir_Archive . basename($_FILES[$name_Input]["name"]);
                $uploadOk = 1; // Indicador si la subida es exitosa
                $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Extensión del archivo

                // Verificar si es un archivo PDF
                if ($pdfFileType != "pdf") {
                    return false;
                }

                // Verificar si hubo algún error durante la subida
                if ($uploadOk == 0) {
                    return false;
                } else {
                    // Intentar subir el archivo
                    if (move_uploaded_file($_FILES[$name_Input]["tmp_name"], $target_file)) {
                        // echo "El archivo " . basename($_FILES[$name_Input]["name"]) . " ha sido subido.";
                        return true;
                    } else {
                        return false;
                    }
                }
            }

            //Execute transaccion

            $queryUpdateDates = "UPDATE user_ffh SET rfc_u = '$rfc', type_rfc_u = '$type', curp_u = '$curp', pass_u = '$pass', reason_u = '$reason_social', type_proveedor_1_u = '$option_one', type_proveedor_2_u = '$option_two', direction_u = '$direct', name_vtas_u = '$name_vta', email_vtas_u = '$email_vta', phone_vtas_u = $phone_vta, mobile_vtas_u = $mobile_vta, name_conta_u = '$name_conta', email_conta_u = '$email_conta', phone_conta_u = $phone_conta, mobile_conta_u = $mobile_conta, name_cc_u = '$name_cc', email_cc_u = '$email_cc', phone_cc_u = $phone_cc, mobile_cc_u = $mobile_cc, days_credit_u = '$days_credit' ,state_u = '$states' WHERE id_u = $id";
            $ExecutequeryUpdateDates = $this->connect->query($queryUpdateDates);
            if ($ExecutequeryUpdateDates) {
                $queryMain = true;
            } else {
                $queryMain = false;
            }


            if ($const_fiscal1 != "") {
                $updateFileDb1 = "UPDATE user_ffh SET const_fiscal_u = '$const_fiscal1' WHERE id_u = $id";
                $exexuteFileDb1 = $this->connect->query($updateFileDb1);
                if ($exexuteFileDb1 && ActualizarArchivos($nameOldFile1, 'nose1', '../assets/archives/dir_fisical/')) {
                    $fileUp1 = true;
                } else {
                    $fileUp1 = false;
                }
            }

            if ($const_o_cump1 != "") {
                $updateFileDb2 = "UPDATE user_ffh SET const_o_cump_u = '$const_o_cump1' WHERE id_u = $id";
                $exexuteFileDb2 = $this->connect->query($updateFileDb2);
                if ($exexuteFileDb2 && ActualizarArchivos($nameOldFile2, 'nose2', '../assets/archives/dir_cumplimiento/')) {
                    $fileUp2 = true;
                } else {
                    $fileUp2 = false;
                }
            }

            if ($const_cta_banc1 != "") {
                $updateFileDb3 = "UPDATE user_ffh SET const_cta_banc_u = '$const_cta_banc1' WHERE id_u = $id";
                $exexuteFileDb3 = $this->connect->query($updateFileDb3);
                if ($exexuteFileDb3 && ActualizarArchivos($nameOldFile3, 'nose3', '../assets/archives/dir_bancaria/')) {
                    $fileUp3 = true;
                } else {
                    $fileUp3 = false;
                }
            }

            if ($fileUp1 == false || $fileUp2 == false || $fileUp3 == false || $queryMain == false) {
                return false;
            } else {
                return true;
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function deletePrice($id)
    {
        $queryDrop = "DELETE FROM user_ffh WHERE id_u = $id";
        $queryDrop = $this->connect->query($queryDrop);

        if ($queryDrop) {
            return true;
        } else {
            return false;
        }
    }

    public function DropFile($nameOldFile, $dir_Archive)
    {
        if (file_exists($dir_Archive . $nameOldFile)) {
            if (!unlink($dir_Archive . $nameOldFile)) {
                return false;
            }
        }
    }

    public function showPriceEspesific($ide)
    {
        $queryPrices5 = "SELECT * FROM user_ffh WHERE id_u = '$ide'";
        $ExqueryPrices5 = $this->connect->query($queryPrices5);
        $prices5 = array();
        while ($row5 = $ExqueryPrices5->fetch_assoc()) {
            $prices5[] = $row5;
        }
        return $prices5;
    }

    /**
     * Apartir de aqui se implementaran las funciones que seran utilizadas para el apartado del gestor de pedidos (Hay que verificar la logica)
     */

    /**
     * !!!!!!!!! FUNCIONES PARA EXTRAER LA INFORMACION A LA PANTALLA PRINCIPAL
     */

    //Funcion cargar y extraer todos los proveedores disponibles
    public function showSuppilers()
    {
        $queryShowSuppliers = "SELECT * FROM user_ffh WHERE state_u = 'acepted'";
        $executeShowSuppliers = $this->connect->query($queryShowSuppliers);
        $ShowSuppliers = array();
        while ($rowSuppliers = $executeShowSuppliers->fetch_assoc()) {
            $ShowSuppliers[] = $rowSuppliers;
        }
        return $ShowSuppliers;
    }

    //Funcion cargar y extraer todos los pedidos realizados
    public function showPedidos()
    {
        $queryShowPedidos = "SELECT * FROM pedidos_quote WHERE estado_solicitud_p = 'solicitado' OR estado_solicitud_p = 'atendido' OR estado_solicitud_p = 'Declinado'";
        $executeShowPedidos = $this->connect->query($queryShowPedidos);
        $ShowPedidos = array();
        while ($rowShowPedidos = $executeShowPedidos->fetch_assoc()) {
            $ShowPedidos[] = $rowShowPedidos;
        }
        return $ShowPedidos;
    }

    //Funcion para cargar y extraer todos los pedidos curso para entrega
    public function showPedidosCurso()
    {
        $queryshowPedidosCurso = "SELECT * FROM pedidos_quote WHERE estado_entrega_p = 'preparando' OR estado_entrega_p = 'pendiente' OR estado_entrega_p = 'encamino'";
        $executeshowPedidosCurso = $this->connect->query($queryshowPedidosCurso);
        $showPedidosCurso = array();
        while ($rowshowPedidosCurso = $executeshowPedidosCurso->fetch_assoc()) {
            $showPedidosCurso[] = $rowshowPedidosCurso;
        }
        return $showPedidosCurso;
    }

    //Funcion para cargar y extraer las solicitudes de acceso al almacen
    public function showSolAccsAlmacen()
    {
        $queryShowSolAccsAlmacen = "SELECT * FROM pedidos_quote WHERE estado_almacen_p = 'enrevision' OR estado_almacen_p = 'aceptado' OR estado_almacen_p = 'retenido' OR estado_almacen_p = 'declinado'";
        $executeShowSolAccsAlmacen = $this->connect->query($queryShowSolAccsAlmacen);
        $SolAccsAlmacen = array();
        while ($rowShowSolAccsAlmacen = $executeShowSolAccsAlmacen->fetch_assoc()) {
            $SolAccsAlmacen[] = $rowShowSolAccsAlmacen;
        }
        return $SolAccsAlmacen;
    }

    //Funcion para cargar y extraer los reportes de pedidos antes de ser entregados
    public function showReportsPedidos()
    {
        $queryReportPedidos = "SELECT * FROM reportes_quote";
        $executeReportPedidos = $this->connect->query($queryReportPedidos);
        $ReportPedidos = array();
        while ($rowReportPedidos = $executeReportPedidos->fetch_assoc()) {
            $ReportPedidos[] = $rowReportPedidos;
        }
        return $ReportPedidos;
    }

    //Funcion para cargar y extraer los pedidos que hayan completado el proceso desde la solicitud hasta la entrega.
    public function showEndPedidos()
    {
        $queryEndPedidos = "SELECT * FROM pedidos_quote WHERE estado_almacen_p = 'ingresado'";
        $executeEndPedidos = $this->connect->query($queryEndPedidos);
        $EndPedidos = array();
        while ($rowEndPedidos = $executeEndPedidos->fetch_assoc()) {
            $EndPedidos[] = $rowEndPedidos;
        }
        return $EndPedidos;
    }

    /**
     * !!!!!!!!! FUNCIONES PARA ACCIONES Y USO EN FORMULARIOS
     */

    //Funcion para subir un archivo XML a servidor
    public function subirXML($nombreInput, $target_dir)
    {
        $verification_File = false;

        $target_file = $target_dir . basename($_FILES[$nombreInput]["name"]);
        $uploadOk = 1; // Indicador si la subida es exitosa
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Extensión del archivo

        // Verificar si es un archivo PDF
        if ($pdfFileType != "xml") {
            // return "Solo se permiten archivos PDF.";
            $verification_File = false;
        }

        // Verificar si hubo algún error durante la subida
        if ($uploadOk == 0) {
            return "El archivo no fue subido.";
        } else {
            // Intentar subir el archivo
            if (move_uploaded_file($_FILES[$nombreInput]["tmp_name"], $target_file)) {
                $verification_File = true;
            } else {
                $verification_File = false;
            }
        }

        //Validacion de que el archivo haya sido subido correctamente
        if ($verification_File == false) {
            return false;
        } else {
            return true;
        }
    }

    //Funcion para actualizar el XML que esta dado de alta en el servidor
    public function ActualizarXML($nameOldFile, $name_Input, $dir_Archive, $id_pedido, $nombre_xml)
    {
        $queryActualizarXML = "UPDATE pedidos_quote SET xml_p = '$nombre_xml' WHERE id_p = $id_pedido";
        $executeActualizarXML = $this->connect->query($queryActualizarXML);

        if ($executeActualizarXML) {
            //Se elimina el archivo antiguo si es que existe
            if (file_exists($dir_Archive . $nameOldFile)) {
                if (!unlink($dir_Archive . $nameOldFile)) {
                    return false;
                }
            }

            $target_file = $dir_Archive . basename($_FILES[$name_Input]["name"]);
            $uploadOk = 1; // Indicador si la subida es exitosa
            $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Extensión del archivo

            // Verificar si es un archivo PDF
            if ($pdfFileType != "xml") {
                return false;
            }

            // Verificar si hubo algún error durante la subida
            if ($uploadOk == 0) {
                return false;
            } else {
                // Intentar subir el archivo
                if (move_uploaded_file($_FILES[$name_Input]["tmp_name"], $target_file)) {
                    // echo "El archivo " . basename($_FILES[$name_Input]["name"]) . " ha sido subido.";
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    //Funcion para eliminar el XML
    public function EliminarXML($nombreArchivo, $dir_Archive)
    {
        if (file_exists($dir_Archive . $nombreArchivo)) {
            if (!unlink($dir_Archive . $nombreArchivo)) {
                return false;
            }
            return true;
        }
    }


    //Funcion para actualizar el xml en caso de que el usuario lo requiera asi

    //Funcion para hacer la creacion de un nuevo pedido 
    public function CrearPedido($id, $nombre, $xml, $observaciones)
    {
        $queryCrearPedido = "INSERT INTO pedidos_quote (id_proveedor, nombre_proyecto_p, xml_p, estado_solicitud_p ,observaciones_solicitud_p, fecha_emision_p) VALUES ($id, '$nombre', '$xml', 'solicitado', '$observaciones', NOW())";
        $executeCrearPedido = $this->connect->query($queryCrearPedido);

        if ($executeCrearPedido) {
            return true;
        } else {
            return false;
        }
    }

    //Funcion para actualizar los datos del pedido
    public function ActualizarPedido($id_p, $nombre_proyecto, $observaciones_solicitud, $id_proveedor)
    {
        $queryActualizarPedido = "UPDATE pedidos_quote SET nombre_proyecto_p = '$nombre_proyecto', observaciones_solicitud_p = '$observaciones_solicitud', id_proveedor = $id_proveedor WHERE id_p = $id_p";
        $executeActualizarPedido = $this->connect->query($queryActualizarPedido);

        if ($executeActualizarPedido) {
            return true;
        } else {
            return false;
        }
    }

    public function EliminarPedido($id)
    {
        $queryEliminarPedido = "DELETE FROM pedidos_quote WHERE id_p = $id";
        $queryEliminarPedido = $this->connect->query($queryEliminarPedido);

        if ($queryEliminarPedido) {
            return true;
        } else {
            return false;
        }
    }
    public function ControlAlmacen($id_pedido, $estado_p, $comentarios_p)
    {
        //Query para la actualización del estado del pedido respecto al almacén
        $qEstadoAlmacen = "UPDATE pedidos_quote SET estado_almacen_p = '$estado_p', observaciones_almacen_p = '$comentarios_p', fecha_entrada_alamcen_p = NOW() WHERE id_p = $id_pedido";
        $eEstadoAlmacen = $this->connect->query($qEstadoAlmacen);

        if ($estado_p == 'ingresado' || $estado_p == 'declinado') {
            $qEliminarReporte = "DELETE FROM reportes_quote WHERE id_p = $id_pedido";
            $this->connect->query($qEliminarReporte);
        }

        if (!$eEstadoAlmacen) {
            return false;
        } else {
            return true;
        }
    }

    public function Reporte($id_pedido, $motivo_r, $cantidad_p_r, $cantidad_r_r, $devueltos, $observaciones_r, $id_proveedor)
    {
        //Query para la creación del reporte en dado caso de que el usuario lo requiera
        $qReportePedido = "INSERT INTO reportes_quote (motivo_r, fecha_recepcion_r, cantidad_p_r, cantidad_r_r, devueltos_r, observaciones_r, id_p, id_proveedor) VALUES ('$motivo_r', NOW(), $cantidad_p_r, $cantidad_r_r, $devueltos, '$observaciones_r', $id_pedido, $id_proveedor)";
        $eReportePedido = $this->connect->query($qReportePedido);

        if (!$eReportePedido) {
            // echo "<script>alert('".$this->connect->error."')</script>";
            return false;
        } else {
            return true;
        }
    }
}
