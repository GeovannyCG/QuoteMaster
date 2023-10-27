<?php
//Creation of class Connection to connect with server
class Connection {

    //Declaration of variables with credentials of server
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $name_db = "fiscalfactshub_db";

    //Declarartion of variable that save the connection at server
    private $conn;

    public function __construct()
    {
        //Asignation of connection with a execute function mysqli
        $this -> conn = new mysqli($this -> host, $this -> user, $this -> password, $this -> name_db);

        //In case of error state the conenction will cancel.
        if ($this->conn->connect_error) {
            echo "Lo sentimos, no pudimos establecer coneccion.";
        }
    }

    //In another case the information connection is sends
    public function getConn() {
        return $this->conn;
    }
}