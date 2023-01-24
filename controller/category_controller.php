<?php
require_once '../model/category.php';

if(isset($_POST["saveCategory"])) addCategory();
if(isset($_GET["cat_id"])) deleteCategorie();

function addCategory(){
    $category = new Categories();
    $category->setcategorie($_POST['name-categorie']);

    if(empty($category->categorie)){
        $_SESSION['errorCategory'] = 'Entrer une categorie'; 
    }
    else{
        $category->addcategorie();
        header("Location:../view/dashboard.php"); 
    } 

}

function getCategories(){
    $category = new Categories();
    return $category->getallcategorie();

}

function deleteCategorie(){
    $category = new Categories();
    $category->setCategoryId($_GET["cat_id"]);

    $category->deletecategorie();
    header("Location:../view/dashboard.php");  
}

$category = new Categories();
$countCategorie = $category->countcategorie();