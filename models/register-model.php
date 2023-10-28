<?php
//Implement of data base config
require('../config/connection-bd.php');

//Creation of model class
class Registrer
{

    //Creation of variable where will save the credentials
    private $conn;

    //Creation construct of class
    public function __construct()
    {
        $ObjectConn = new Connection();
        $this->conn = $ObjectConn->getConn();
    }

    /**
     * Here are the public funtions to use in actions / controllers
     */

    //Funcion para subir los Archivos PDFS al sistema
    public function subirArchivo($nombreInput, $target_dir)
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

    //Funtion to make a register in system
    public function registerPrice($type, $rfc, $curp, $reason_social, $option_one, $option_two, $const_fiscal1, $const_o_cump1, $const_cta_banc1, $direct, $name_vta, $email_vta, $phone_vta, $mobile_vta, $name_conta, $email_conta, $phone_conta, $mobile_conta, $name_cc, $email_cc, $phone_cc, $mobile_cc, $pass, $days_credit)
    {
        $query = "INSERT INTO user_ffh (
            rfc_u, 
            type_rfc_u, 
            curp_u, 
            pass_u, 
            reason_u, 
            type_proveedor_1_u, 
            type_proveedor_2_u, 
            const_fiscal_u, 
            const_o_cump_u, 
            const_cta_banc_u, 
            direction_u, 
            name_vtas_u, 
            email_vtas_u, 
            phone_vtas_u, 
            mobile_vtas_u, 
            name_conta_u, 
            email_conta_u, 
            phone_conta_u, 
            mobile_conta_u, 
            name_cc_u, 
            email_cc_u, 
            phone_cc_u, 
            mobile_cc_u,
            days_credit_u,
            state_u) VALUES ('$rfc', '$type', '$curp', '$pass', '$reason_social', '$option_one', '$option_two', '$const_fiscal1', 
            '$const_o_cump1', '$const_cta_banc1', '$direct', '$name_vta', '$email_vta', $phone_vta, $mobile_vta, '$name_conta', '$email_conta', 
            $phone_conta, $mobile_conta, '$name_cc', '$email_cc', $phone_cc, $mobile_cc, '$days_credit', 'cheking')";

        $cursor_Register = $this->conn->query($query);

        if ($cursor_Register) {
            return true;
        } else {
            return false;
        }
        
    }
}