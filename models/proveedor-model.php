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
        $queryshowPedidosCursoP = "SELECT * FROM pedidos_quote WHERE estado_entrega_p = 'preparando' AND id_proveedor = $id_proveedor";
        $executeshowPedidosCursoP = $this->connection->query($queryshowPedidosCursoP);
        $showPedidosCursoP = array();
        while ($rowshowPedidosCursoP = $executeshowPedidosCursoP->fetch_assoc()) {
            $showPedidosCursoP[] = $rowshowPedidosCursoP;
        }
        return $showPedidosCursoP;
    }

    //Funcion para cargar y extraer las solicitudes de acceso al almacen
    public function showSolAccsAlmacenP()
    {
        $queryShowSolAccsAlmacenP = "SELECT * FROM pedidos_quote WHERE ...";
        $executeShowSolAccsAlmacenP = $this->connection->query($queryShowSolAccsAlmacenP);
        $SolAccsAlmacenP = array();
        while ($rowShowSolAccsAlmacenP = $executeShowSolAccsAlmacenP->fetch_assoc()) {
            $SolAccsAlmacenP[] = $rowShowSolAccsAlmacenP;
        }
        return $SolAccsAlmacenP;
    }

    //Funcion para cargar y extraer los reportes de pedidos antes de ser entregados
    public function showReportsPedidosP()
    {
        $queryReportPedidosP = "SELECT * FROM reportes_quote";
        $executeReportPedidosP = $this->connection->query($queryReportPedidosP);
        $ReportPedidosP = array();
        while ($rowReportPedidosP = $executeReportPedidosP->fetch_assoc()) {
            $ReportPedidosP[] = $rowReportPedidosP;
        }
        return $ReportPedidosP;
    }

    //Funcion para cargar y extraer los pedidos que hayan completado el proceso desde la solicitud hasta la entrega.
    public function showEndPedidosP()
    {
        $queryEndPedidosP = "SELECT * FROM reportes_quote";
        $executeEndPedidosP = $this->connection->query($queryEndPedidosP);
        $EndPedidosP = array();
        while ($rowEndPedidosP = $executeEndPedidosP->fetch_assoc()) {
            $EndPedidosP[] = $rowEndPedidosP;
        }
        return $EndPedidosP;
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
    public function ActualizarEstadoEnvio($estado, $comentarios) {
        $qActualizarEstadoEnvio = "UPDATE pedidos_quote SET estado_entrega_p = '$estado', observaciones_entrega_p = '$comentarios'";
        $eActualizarEstadoEnvio = $this->connection->query($qActualizarEstadoEnvio);
        if ($eActualizarEstadoEnvio) {
            return true;
        } else {
            return false;
        }
    }
}
