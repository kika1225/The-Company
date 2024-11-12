<?php

class Database
{
    private $server_name  = "localhost";
    private $username     = "root";
    private $password  = "root";
    private $db_name  = "the_company";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        // Returns the error message from the last connection attempt.
        if($this->conn->connect_error){
            die("Unable to connect to the datebase" . $this->conn->connect_error);
            // our own error message  and Error message of the property connect_error
        }
    }



}



?>