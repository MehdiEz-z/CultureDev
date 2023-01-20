<?php
require_once __DIR__.'/connection.php';

class User extends Connection
{
    public $id;
    public $username;
    public $email;
    public $password;

    //=================================== setters ===================================//
    
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setUsertName($username): void
    {
        $this->username = $username;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }


    //=================================== methods ===================================//

    public function signup(){
    
        $stmt = $this->connect()->prepare("INSERT INTO user VALUES ( ?,?,?,?)");
        $stmt->execute([NULL,$this->username,$this->email,$this->password]);

    }

    public function login(){
        $stmt = $this->connect()->prepare("SELECT * FROM user WHERE email=?");
        $stmt->execute([$this->email]);
        $user = $stmt->fetch();

        return $user;
    }
}



?>