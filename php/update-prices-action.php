<?php
session_start();

include('../models/home-model.php');

try {

    if (isset($_SESSION['rfc'])) {
        //OBTENCION DE DATOS POR URL
        $id = $_GET['id'];
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
        $ObjectHome = new Home();
        $exexuteAction = $ObjectHome->updatePrice($id, $type, $rfc, $curp, $reason_social, $option_one, $option_two, $const_fiscal1, $const_o_cump1, $const_cta_banc1, $direct, $name_vta, $email_vta, $phone_vta, $mobile_vta, $name_conta, $email_conta, $phone_conta, $mobile_conta, $name_cc, $email_cc, $phone_cc, $mobile_cc, $pass, $days_credit, $states ,$nameOldFile1, $nameOldFile2, $nameOldFile3);

        if ($exexuteAction == true) {
            sleep(3);
            echo "<script>location.href='./checkPrices'</script>";
        } else {
            sleep(3);
            echo "<script>location.href='./checkPrices'</script>";
        }
    } else {
        echo "<script>location.href='./Home'</script>";
    }
} catch (\Throwable $th) {
    echo "<script>alert('".$th."')</script>";
    sleep(10);
    echo "<script>location.href='./checkPrices'</script>";
}
