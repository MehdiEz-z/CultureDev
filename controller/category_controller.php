<?php
require_once '../model/category.php';

if(isset($_POST["saveCategory"])) addCategory();

function addCategory(){
    $category = new Categories();
    $category->setcategorie($_POST['name-categorie']);

    $category->addcategorie();
    header("Location:../view/dashboard.php");  

}