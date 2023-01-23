<?php
require_once 'connection.php';

class Categories extends Connection{
    
    public $id;
    public $categorie;

    public function setCategoryId( $id)
    {
        $this->id = $id;
    }

    public function setcategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    //=================================== methods ===================================//

    function getallcategorie(){
   
        $stmt = $this->connect()->prepare("SELECT * FROM category");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function addcategorie(){

        $stmt = $this->connect()->prepare("INSERT INTO category  VALUES (NULL,?)");
        $stmt->execute([$this->categorie]);
        
    }

    // function updatecategorie(){
        
    //     $stmt = $this->connect()->prepare("UPDATE category SET name = ? WHERE category_id = ?");
    //     $stmt->execute([$this->categorie, $this->id]);
    // }

    function deletecategorie(){

        $stmt = $this->connect()->prepare("DELETE FROM category WHERE category_id=?");
        $stmt->execute([$this->id]);
    }

    function countcategorie(){
   
        $stmt = $this->connect()->prepare("SELECT * FROM category");
        $stmt->execute();

        return $stmt->rowCount();
    }
}