<?php
require_once 'connection.php';

class Articles extends Connection{

    public $id;
    public $auteur;
    public $titre;
    public $category;
    public $description;
    public $date;
    public $cover;
    public $covername;

    //=================================== setters ===================================//
    
    public function setArticleId($id)
    {
        $this->id = $id;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setiCover($cover)
    {
        $this->cover = $cover;
    }
    
    public function setCoverName($covername)
    {
        $this->covername = $covername;
    }  
    

    //=================================== methods ===================================//

    function getallarticle(){
   
        $stmt = $this->connect()->prepare("SELECT * FROM articles 
        INNER JOIN users on id = articles.id_user
        INNER JOIN category on category_id = articles.id_category");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function addarticle(){

        $stmt = $this->connect()->prepare("INSERT INTO articles  VALUES (NULL,?,?,?,?,?,?)");
        $stmt->execute([$this->auteur,$this->titre,$this->category,$this->description,$this->date,$this->cover]);
        move_uploaded_file($this->covername, '../Assets/Images/Articles/'.$this->cover);
        
    }

    // function updatearticle(){
        
    //     $stmt = $this->connect()->prepare("UPDATE articles SET name = ? WHERE articles_id = ?");
    //     $stmt->execute([$this->article, $this->id]);
    // }

    function deletearticle(){

        $stmt = $this->connect()->prepare("DELETE FROM articles WHERE articles_id=?");
        $stmt->execute([$this->id]);
    }

    function countarticle(){
   
        $stmt = $this->connect()->prepare("SELECT * FROM articles");
        $stmt->execute();

        return $stmt->rowCount();
    }

}