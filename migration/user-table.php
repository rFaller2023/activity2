<?php

include '../database/database.php';

class Table extends Database
{
    public function createTable()
    {
        $created = $this->conn->query("CREATE TABLE IF NOT EXISTS users(
            id int auto_increment primary key,
            first_name varchar(255) not null,
            last_name varchar(255) not null,
            email varchar(255) not null unique,
            password varchar(255) not null
            )engine=InnoDB");
    }
}

