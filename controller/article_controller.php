<?php
require_once '../model/article.php';

if(isset($_POST["addArt"])) addArticle();
if(isset($_POST["updtArt"])) updateArticle();
if(isset($_GET["article_Did"])) deleteArticle();

function getArticles(){
    $article = new Articles();
    return $article->getallarticle();
}

function addArticle(){
    $article = new Articles();

    $article->setAuteur($_SESSION['user']);
    $article->setTitre($_POST["article-titre"]);
    $article->setCategory($_POST["article-categorie"]);
    $article->setDescription($_POST['article-description']);
    $article->setDate($_POST["article-date"]);
    $article->setCoverName($_FILES['article-cover']['tmp_name']);
    $article->setCover(uniqid().'_'.$_FILES['article-cover']['name']);

    $article->addarticle();
    header("Location:../view/dashboard.php");  
}

function updateArticle(){
    $article = new Articles();

    $article->setArticleId($_POST['article-id']);
    $article->setAuteur($_SESSION['user']);
    $article->setTitre($_POST['article-titre']);
    $article->setCategory($_POST['article-categorie']);
    $article->setDescription($_POST['article-description']);
    $article->setDate($_POST["article-date"]);
    $article->setCoverName($_FILES['article-cover']['tmp_name']);
    $article->setCover(uniqid().'_'.$_FILES['article-cover']['name']);
    $article->setOldCover($_POST["old-article-cover"]);

    $article->updatearticle();
    header("Location:../view/dashboard.php"); 
}

function deleteArticle(){
    $article = new Articles();

    $article->setArticleId($_GET["article_Did"]);

    $article->deletearticle();
    header("Location:../view/dashboard.php"); 
}

$article = new Articles();
$countArticle = $article->countarticle();