<?php
//Inclusion de el model Register y sus clases
include('../models/register-model.php');

try {


    // Obtencion de los datos en el formulario de registro por medio de metodo post
    $type = $_POST['tipousuario'];
    $rfc = $_POST['rfc'];
    $curp = $_POST['curp'];
    $reason_social = $_POST['reasonsocial'];
    $option_one = $_POST['option1'];
    $option_two = $_POST['option2'];
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

    //Creacion de instancia de la clase Registrer para el uso de sus funciones
    $ObjectRegister = new Registrer();

    //Funcion para el registro de los datos ingresados en el formulario

    //Funciones para subir los Archivos PDF'
    if ($ObjectRegister->registerPrice($type, $rfc, $curp, $reason_social, $option_one, $option_two, $const_fiscal1, $const_o_cump1, $const_cta_banc1, $direct, $name_vta, $email_vta, $phone_vta, $mobile_vta, $name_conta, $email_conta, $phone_conta, $mobile_conta, $name_cc, $email_cc, $phone_cc, $mobile_cc, $pass, $days_credit) == false || $ObjectRegister->subirArchivo('nose1', '../assets/archives/dir_fisical/') == false || $ObjectRegister->subirArchivo('nose2', '../assets/archives/dir_cumplimiento/') == false || $ObjectRegister->subirArchivo('nose3', '../assets/archives/dir_bancaria/') == false) {
        sleep(5);
        echo "<script>location.href='./Register'</script>";
    } else {
        sleep(5);
        echo "<script>window.location.href='./Thanks?user=" . urlencode($rfc) . "';</script>";
    }

} catch (\Throwable $th) { // En caso de un fallo interno durante la ejecucion se atrapara el error y sera mostrado al usuario
    echo "<script>alert('Ups!, ha ocurrido un error...505 " . $th . "')</script>"; //POR ELIMINAR
    sleep(5);
    echo "<script>location.href='./Register'</script>";
}