<?php

class DatabaseConnection
{
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSEWORD, DB_DATABASE);

        if($conn->connect_error)
        {
            die("<h1>Pas de connexion à la base de donnée</h1>");
        }
        //echo "Vous etes connecté à la Base de donnée ";
        return $this->conn = $conn;

    }

}