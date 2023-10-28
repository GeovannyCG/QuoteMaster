<?php
session_start();

include('../models/home-model.php');

try {

    if (isset($_SESSION['rfc'])) {
        //Obtencion de las credenciales por medio de la URL
        $id = $_GET['id'];
        $state = $_GET['process'];


        //Creacion de la instaciamiento de la clase Home del model
        $ObjectHome = new Home();
        $exexuteAction = $ObjectHome->Actions($id, $state);

        if ($exexuteAction == true) {
            echo "<script>location.href='./Home'</script>";
        } else {
            echo "Lo sentimos no fue posible Aceptar o declinar la cotizacion. Intentalo mas tarde. " . $th;
            sleep(5);
            echo "<script>location.href='./Home'</script>";
        }
    } else {
        echo "<script>location.href='./'</script>";
    }
} catch (\Throwable $th) {
    echo "Lo sentimos no fue posible Aceptar o declinar la cotizacion. Intentalo mas tarde. " . $th;
    sleep(5);
    echo "<script>location.href='./Home'</script>";
}
