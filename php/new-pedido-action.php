<?php
//Incializar la sesion actual
session_start();
//Importar el Model del Home para el uso de sus metodos
include("../models/home-model.php");

try {
    if (isset($_SESSION["rfc"])) {
        
    } else {
        echo "<script>location.href='./Home'</script>";
    }
} catch (\Throwable $th) {
    //throw $th;
}