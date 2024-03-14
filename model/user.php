<?php
include 'database/database.php';
class User extends Database
{
    public function Inserted($params)
    {
        $first_name = $params['first_name'];
        $last_name = $params['last_name'];
        $email = $params['email'];
        $password = $params['password'];

        $isInserted = $this->conn->query("INSERT INTO users(first_name, last_name, email, password)
        VALUES('$first_name', '$last_name', '$email', '$password') ");
        
    }
    public function getAll()
    {
        $get = $this->conn->query("SELECT * FROM users");
        $result = $get->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
    public function Search($params)
    {
        
        $id = $params['id'] ??'';
        $get = $this->conn->query("SELECT * FROM users WHERE id LIKE '%$id%'");
        $result = $get->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}
?>