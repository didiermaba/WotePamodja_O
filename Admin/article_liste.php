<?php
  include '../class/database.php';
  require '../class/articleDAO.php';
  require '../class/article.php';
  require '../class/menuDAO.php';
  require '../class/menu.php';
      
 
 $articleDAO= new articleDAO;
 $arti= $articleDAO->ListeArticles();
 
 


 $template='article_liste';
 include'layout.phtml'
 

?>