<?php
//Implementacion de la base de datos.
require('../config/connection-bd.php');

//Creacion de clase para este archivo PHP.
class Login
{
    //Variable que almacenara informacion de la conexion con la base de datos.
    private $connect;

    public function __construct()
    {
        $connectionObj = new Connection();
        $this->connect = $connectionObj->getConn();
    }

    //Funcion para validar usuario
    function validationUser($rfc, $password)
    {
        //Si los campos estan llenos, se hace la extraccion de las campos "contrasenia_u, restriccion_u, intentos_u" que tengan que ver con el correo ingresado
        $credentials = "SELECT pass_uq  FROM users_quote WHERE rfc_uq = '$rfc'";
        $restcredentials = $this->connect->query($credentials);

        //Se valida que el correo ingresado este ligado a una cuenta en el sistema
        if ($restcredentials->num_rows > 0) {
            //Asociacion de columnas de los datos consultados que tengan que ver con el correo asociado a una cuenta dentro del sistema
            $rowt = $restcredentials->fetch_assoc();
            $pass = $rowt['pass_uq'];

            //Validar si la contraseña ingresada por el usuario es igual a la que esta ligada a la cuenta.
            if ($password == $pass) {
                /* Si esta contraseña es correcta se reiniciaran los intentos de ingreso ademas de que se iniciara un variable de sesion 
                    para finalmente redireccionar al "Home" del usuario*/
                sleep(3);
                $_SESSION['rfc'] = $rfc;
                echo "<script>location.href='./Home'</script>";
                exit;
            } else {
                echo "<script>alert('El RFC o Contraseña son erroneos')</script>";
                echo "<script>location.href='./'</script>";
            }
        } else {
            //En caso contrario sera mostrado un mensaje que le indique al usuario que no hay una cuenta asociada con el correo ingresado.
            echo "<script>alert('El correo: " . $rfc . " no tiene una cuenta asociada.')</script>";
            echo "<script>location.href='./'</script>";
            exit;
        }
    }
}
