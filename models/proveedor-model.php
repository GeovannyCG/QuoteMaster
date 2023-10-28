<?php
//Implementacion de la base de datos.
require('../config/connection-bd.php');

class Proveedor
{
    //Variable que funcionara manera de cursor
    private $connection;

    //Declaracion del constructor de la clase Proveedor
    public function __construct()
    {
        $ObjProveedor = new Connection();
        $this->connection = $ObjProveedor->getConn();
    }

    /**
     * Creacion de las funciones que formaran parte de(l) (los) controladores y actions que sean hijas de esta.
     */

    /**
     * !!!!!!!!! FUNCIONES PARA EXTRAER LA INFORMACION A LA PANTALLA PRINCIPAL
     */

    public function IdCuenta($rfcSession)
    {
        $qIdCuenta = "SELECT id_u FROM user_ffh WHERE rfc_u = '$rfcSession'";
        $eIdCuenta = $this->connection->query($qIdCuenta);
        if ($eIdCuenta && $eIdCuenta->num_rows > 0) {
            $fila = $eIdCuenta->fetch_assoc();
            return $fila['id_u'];
        }
    }

    public function ActualizarPerfil($id, $type, $rfc, $curp, $reason_social, $option_one, $option_two, $const_fiscal1, $const_o_cump1, $const_cta_banc1, $direct, $name_vta, $email_vta, $phone_vta, $mobile_vta, $name_conta, $email_conta, $phone_conta, $mobile_conta, $name_cc, $email_cc, $phone_cc, $mobile_cc, $pass, $days_credit, $states, $nameOldFile1, $nameOldFile2, $nameOldFile3)
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
            $ExecutequeryUpdateDates = $this->connection->query($queryUpdateDates);
            if ($ExecutequeryUpdateDates) {
                $queryMain = true;
            } else {
                $queryMain = false;
            }


            if ($const_fiscal1 != "") {
                $updateFileDb1 = "UPDATE user_ffh SET const_fiscal_u = '$const_fiscal1' WHERE id_u = $id";
                $exexuteFileDb1 = $this->connection->query($updateFileDb1);
                if ($exexuteFileDb1 && ActualizarArchivos($nameOldFile1, 'nose1', '../assets/archives/dir_fisical/')) {
                    $fileUp1 = true;
                } else {
                    $fileUp1 = false;
                }
            }

            if ($const_o_cump1 != "") {
                $updateFileDb2 = "UPDATE user_ffh SET const_o_cump_u = '$const_o_cump1' WHERE id_u = $id";
                $exexuteFileDb2 = $this->connection->query($updateFileDb2);
                if ($exexuteFileDb2 && ActualizarArchivos($nameOldFile2, 'nose2', '../assets/archives/dir_cumplimiento/')) {
                    $fileUp2 = true;
                } else {
                    $fileUp2 = false;
                }
            }

            if ($const_cta_banc1 != "") {
                $updateFileDb3 = "UPDATE user_ffh SET const_cta_banc_u = '$const_cta_banc1' WHERE id_u = $id";
                $exexuteFileDb3 = $this->connection->query($updateFileDb3);
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

    public function MostrarPeril($ide)
    {
        $queryPrices5 = "SELECT * FROM user_ffh WHERE id_u = '$ide'";
        $ExqueryPrices5 = $this->connection->query($queryPrices5);
        $prices5 = array();
        while ($row5 = $ExqueryPrices5->fetch_assoc()) {
            $prices5[] = $row5;
        }
        return $prices5;
    }

    //Funcion cargar y extraer todos los pedidos realizados
    public function showPedidosP($id_proveedor)
    {
        $queryShowPedidosP = "SELECT * FROM pedidos_quote WHERE estado_solicitud_p = 'solicitado' AND id_proveedor = $id_proveedor";
        $executeShowPedidosP = $this->connection->query($queryShowPedidosP);
        $ShowPedidosP = array();
        while ($rowShowPedidosP = $executeShowPedidosP->fetch_assoc()) {
            $ShowPedidosP[] = $rowShowPedidosP;
        }
        return $ShowPedidosP;
    }

    public function showPedidosProgramar($id_proveedor)
    {
        $queryShowPedidosPA = "SELECT * FROM pedidos_quote WHERE estado_solicitud_p = 'atendido' AND id_proveedor = $id_proveedor";
        $executeShowPedidosPA = $this->connection->query($queryShowPedidosPA);
        $ShowPedidosPA = array();
        while ($rowShowPedidosPA = $executeShowPedidosPA->fetch_assoc()) {
            $ShowPedidosPA[] = $rowShowPedidosPA;
        }
        return $ShowPedidosPA;
    }

    public function DiasCredito($id_proveedor)
    {
        $qDiasCredito = "SELECT * FROM user_ffh WHERE id_u = $id_proveedor";
        $eDiasCredito = $this->connection->query($qDiasCredito);
        if ($eDiasCredito && $eDiasCredito->num_rows > 0) {
            $fila = $eDiasCredito->fetch_assoc();
            return $fila['days_credit_u'];
        }
    }

    //Funcion para cargar y extraer todos los pedidos curso para entrega
    public function showPedidosCursoP($id_proveedor)
    {
        $queryshowPedidosCursoP = "SELECT * FROM pedidos_quote WHERE estado_entrega_p = 'preparando' OR estado_entrega_p = 'pendiente' OR estado_entrega_p = 'encamino' AND id_proveedor = $id_proveedor";
        $executeshowPedidosCursoP = $this->connection->query($queryshowPedidosCursoP);
        $showPedidosCursoP = array();
        while ($rowshowPedidosCursoP = $executeshowPedidosCursoP->fetch_assoc()) {
            $showPedidosCursoP[] = $rowshowPedidosCursoP;
        }
        return $showPedidosCursoP;
    }

    //Funcion para cargar y extraer las solicitudes de acceso al almacen
    public function showSolAccsAlmacenP($id_proveedor)
    {
        $queryShowSolAccsAlmacen = "SELECT * FROM pedidos_quote WHERE estado_almacen_p = 'enrevision' OR estado_almacen_p = 'aceptado' OR estado_almacen_p = 'retenido' OR estado_almacen_p = 'declinado' AND id_proveedor = $id_proveedor";
        $executeShowSolAccsAlmacen = $this->connection->query($queryShowSolAccsAlmacen);
        $SolAccsAlmacen = array();
        while ($rowShowSolAccsAlmacen = $executeShowSolAccsAlmacen->fetch_assoc()) {
            $SolAccsAlmacen[] = $rowShowSolAccsAlmacen;
        }
        return $SolAccsAlmacen;
    }

    //Funcion para cargar y extraer los reportes de pedidos antes de ser entregados
    public function showReportsPedidosP($id_proveedor)
    {
        $queryReportPedidos = "SELECT * FROM reportes_quote WHERE id_proveedor = $id_proveedor";
        $executeReportPedidos = $this->connection->query($queryReportPedidos);
        $ReportPedidos = array();
        while ($rowReportPedidos = $executeReportPedidos->fetch_assoc()) {
            $ReportPedidos[] = $rowReportPedidos;
        }
        return $ReportPedidos;
    }

    //Funcion para cargar y extraer los pedidos que hayan completado el proceso desde la solicitud hasta la entrega.
    public function showEndPedidosP($id_proveedor)
    {
        $queryEndPedidos = "SELECT * FROM pedidos_quote WHERE estado_almacen_p = 'ingresado' AND id_proveedor = $id_proveedor";
        $executeEndPedidos = $this->connection->query($queryEndPedidos);
        $EndPedidos = array();
        while ($rowEndPedidos = $executeEndPedidos->fetch_assoc()) {
            $EndPedidos[] = $rowEndPedidos;
        }
        return $EndPedidos;
    }

    /**
     * !!!!!!!!! FUNCIONES PARA ACCIONES Y USO EN FORMULARIOS
     */

    //Funcion para aceptar el pedido por parte del proveedor
    public function PedidosxSurtir($id_pedido, $fecha_entrega)
    {
        $queryPedidosxSurtir = "UPDATE pedidos_quote SET estado_solicitud_p = 'atendido', fecha_entrega_p = '$fecha_entrega' WHERE id_p = $id_pedido";
        $executePedidosxSurtir = $this->connection->query($queryPedidosxSurtir);
        if ($executePedidosxSurtir) {
            return true;
        } else {
            return false;
        }
    }

    public function PedidosxSurtirDeclinar($id_pedido)
    {
        $queryPedidosxSurtirD = "UPDATE pedidos_quote SET estado_solicitud_p = 'declinado' WHERE id_p = $id_pedido";
        $executePedidosxSurtirD = $this->connection->query($queryPedidosxSurtirD);
        if ($executePedidosxSurtirD) {
            return true;
        } else {
            return false;
        }
    }

    //Funcion para realizar la confirmacion del pedido
    public function PedidosxSurtirProgramar($id_pedido, $dias_credito, $fecha_pago, $factura, $comentarios)
    {
        $qPedidosxSurtirProgramar = "UPDATE pedidos_quote SET estado_entrega_p = 'preparando' ,estado_solicitud_p = 'concretado', dias_credito_p = '$dias_credito', fecha_pago_p = '$fecha_pago', factura_p = '$factura', observaciones_entrega_p = '$comentarios' WHERE id_p = $id_pedido";
        $xPedidosxSurtirProgramar = $this->connection->query($qPedidosxSurtirProgramar);
        if ($xPedidosxSurtirProgramar) {
            return true;
        } else {
            return false;
        }
    }

    //Funcion para subir el archivo PDF de la factura al servidor
    public function subirFactura($nombreInput, $target_dir) //Por editar
    {
        $verification_File = false;

        $target_file = $target_dir . basename($_FILES[$nombreInput]["name"]);
        $uploadOk = 1; // Indicador si la subida es exitosa
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Extensión del archivo

        // Verificar si es un archivo PDF
        if ($pdfFileType != "pdf") {
            // return "Solo se permiten archivos PDF.";
            $verification_File = false;
        }

        // Verificar si hubo algún error durante la subida
        if ($uploadOk == 0) {
            $verification_File = false;
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

    //Funcion para actualizar el estado del envio del pedido
    public function ActualizarEstadoEnvio($estado, $comentarios, $id_pedido)
    {

        if ($estado == 'hallegado') {
            $qActualizarEstadoEnvio = "UPDATE pedidos_quote SET estado_entrega_p = '$estado', observaciones_entrega_p = '$comentarios', estado_almacen_p = 'enrevision' WHERE id_p = $id_pedido";
            $eActualizarEstadoEnvio = $this->connection->query($qActualizarEstadoEnvio);
        } else {
            $qActualizarEstadoEnvio = "UPDATE pedidos_quote SET estado_entrega_p = '$estado', observaciones_entrega_p = '$comentarios' WHERE id_p = $id_pedido";
            $eActualizarEstadoEnvio = $this->connection->query($qActualizarEstadoEnvio);
        }
        if ($eActualizarEstadoEnvio) {
            return true;
        } else {
            return false;
        }
    }
}
