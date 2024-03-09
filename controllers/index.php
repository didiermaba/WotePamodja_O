<?php

//les fichiers php contient du code php pour l'éxecution au niveau du navigateur 
include 'header.php';
include "models/article.php";
include 'models/articleDAO.php';

  // instanciation class DAO
$article=new ArticleDAO;
  // acceder a la class DAO grace a son objet instancier  
 $articles=$article->ListeArticles();



//definir la template:
$template='www/index';
include 'www/layout.phtml';
?>