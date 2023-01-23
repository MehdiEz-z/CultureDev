<?php
require_once '../model/article.php';


function getArticles(){
    $article = new Articles();
    return $article->getallarticle();
}

$article = new Articles();
$countArticle = $article->countarticle();