<?php

    include '../class/database.php';
    require '../class/articleDAO.php';
    require '../class/article.php';
    require '../class/menuDAO.php';
    require '../class/menu.php';
    
   
    $articleDAO= new articletDAO;
    
    $id=$_GET['id'];

    $modif_ok= 0;

    if (isset($_POST['ModifierArticle'])) {
    $titre = htmlspecialchars($_POST['titre']);
    
    $menuDAO= new menuDAO;
    $men= $menuDAO->Update( $menu);

    $modif_ok= 1;

    }


    $articleDAO= new articleDAO;
    $articles= $articleDAO->ShowArticle($id);

    $menuDAO= new MenuDAO;
    $menus= $menuDAO->GetAll();

    
    $template='article_modifier';
    include'layout.phtml';
 ?>