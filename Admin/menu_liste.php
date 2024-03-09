<?php
     
     include '../class/database.php';
     require '../class/articleDAO.php';
     require '../class/article.php';
     require '../class/menuDAO.php';
     require '../class/menu.php';

     $menuDAO= new menuDAO;
     $mn= $menuDAO->GetAll();




 $template='menu_liste';
 include'layout.phtml'
 

?>