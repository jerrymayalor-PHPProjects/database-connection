<?php

class  Dbh{

    private $servername;
    private $username;
    private $password;
    private $dbname;


    // For Procedural PHP
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "oop_db";

        $conn = new mysqli( $this->servername, $this->username, $this->password,  $this->dbname );
        return $conn;
    }



}
