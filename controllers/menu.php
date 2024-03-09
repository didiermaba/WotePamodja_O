<?php
    include 'header.php';
	include "models/article.php";
	include 'models/articleDAO.php';

    //afficher produit selon sa categorie 
    $articleDAO= new ArticleDAO;
    $articles=$articleDAO->ShowArticle_Men($_GET['id']);
    



//derniere partie du code: declaration de la template:
$template="www/menu";
include "www/layout.phtml";

?>