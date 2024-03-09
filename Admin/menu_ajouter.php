<?php

include '../class/database.php';
require '../class/articleDAO.php';
require '../class/article.php';
require '../class/menuDAO.php';
require '../class/menu.php';

 
 $ajout_ok=0;
 if(isset($_POST['ajoutermenu'])){
     
     $titre=$_POST['titre'];
     
     //$menuDAO=new menuDAO;
     //$menu= $menuDAO->add($menu);
     $menuDAO = new MenuDAO();
     $menuDAO->add(new Menu(null, $titre));

    
     $ajouter_ok=1;

  }







$template="menu_ajouter";
include "layout.phtml";

?>