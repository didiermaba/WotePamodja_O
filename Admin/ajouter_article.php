<?php

include '../class/database.php';
require '../class/articleDAO.php';
require '../class/article.php';
require '../class/menuDAO.php';
require '../class/menu.php';

 
 $ajouter_ok=0;
 if(isset($_POST['ajouterartic'])){
     
     $titre=$_POST['titre'];
     $text=$_POST['texte'];
     $mn=$_POST['menu_id'];
     $img=$_POST['image'];

     $articles=new articleDAO;
     $atcls=$articles->add($article);
     
    
     $ajouter_ok=1;

  }







$template="ajouter_article";
include "layout.phtml";

?>