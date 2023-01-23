<?php
require_once 'connection.php';

class User extends Connection{
    
    public $id;
    public $fname;
    public $lname;  
    public $email;
    public $password;
    public $image;
    public $imagename;


    //=================================== setters ===================================//
    
    public function setUserId($id)
    {
        $this->id = $id;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setiImage($image)
    {
        $this->image = $image;
    }
    
    public function setImageName($imagename)
    {
        $this->imagename = $imagename;
    }   



    //=================================== methods ===================================//

    function signup(){
    
        $stmt = $this->connect()->prepare("INSERT INTO users VALUES (NULL,?,?,?,?,?)");  
        $stmt->execute([$this->fname,$this->lname,$this->email,$this->password,$this->image]);
        move_uploaded_file($this->imagename, '../Assets/Images/Users/' .$this->image);
    }

    function login(){

        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE email= ?");
        $stmt->execute([$this->email]);

        return $stmt->fetch(); 
    }

    function getuser(){
       
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id= ?");
        $stmt->execute([$this->id]);

        return $stmt->fetch();
    }

    function countuser(){
   
        $stmt = $this->connect()->prepare("SELECT * FROM users");
        $stmt->execute();
    
        return $stmt->rowCount();
    }
}

?>