<?php
session_start();

include('../models/home-model.php');

try {

    if ($_SESSION['rfc']) {
        //Obtencion del id por URL
        $id = $_GET['id'];
        $nameFile1 = $_GET['file1'];
        $nameFile2 = $_GET['file2'];
        $nameFile3 = $_GET['file3'];
        //creacion de la instancia de la clase Home del modal
        $ObjectHome = new Home();

        $delete = $ObjectHome->deletePrice($id);
        $dropFile1 = $ObjectHome->DropFile($nameFile1, "../assets/archives/dir_fisical/");
        $dropFile2 = $ObjectHome->DropFile($nameFile2, "../assets/archives/dir_cumplimiento/");
        $dropFile3 = $ObjectHome->DropFile($nameFile3, "../assets/archives/dir_bancaria/");

        if($delete == true && $dropFile1 == true && $dropFile2 == true && $dropFile3 == true) {
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
    //throw $th;
}