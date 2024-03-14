<?php

class Database
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost","root","");
        $new = $this->conn->query("CREATE DATABASE IF NOT EXISTS api_db");
        $new = $this->conn->query("USE api_db");


    }

}

$new = new Database();