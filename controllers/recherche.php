<?php

include 'header.php';
include 'models/article.php';
include 'models/articleDAO.php';

//cat

$articledao=new ArticleDAO;

//recherche

if(isset($_GET['motcle'])){

    $motcle=$_GET['motcle'];
    $articles=$articledao->Recherch($motcle);


}

//template
$template="www/recherche";
include "www/layout.phtml";
?>