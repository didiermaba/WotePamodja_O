<?php

include 'header.php';
include 'models/article.php';
include 'models/articleDAO.php';



$articleDAO= new ArticleDAO;

//afficher un article
$article=$articleDAO->ShowArticle($_GET['id']);





//articles similaires
$artikles=$articleDAO->ArticlesSimilaires($article["menu_id"]);

 

$images=$articleDAO->ShowImage($_GET['id']);



// template
$template="www/article";
include 'www/layout.phtml';
?>