<?php
     include '../class/database.php';
     require '../class/articleDAO.php';
     require '../class/article.php';
     require '../class/menuDAO.php';
     require '../class/menu.php';
         
   
    $articleDAO= new articleDAO;
    
    $id=$_GET['id'];

    $modifierar = 0;
    if (isset($_POST['ModifierArticle'])) {
    $titre = htmlspecialchars($_POST['titre']);
    $menu_id = htmlspecialchars($_POST['menu_id']);
    $texte = htmlspecialchars($_POST['texte']);
    $image = htmlspecialchars($_POST['image']);


    $articleDAO= new articleDAO;
    $articles= $articleDAO-> Update($article);

    $modifierar = 1;
    }

    $articleDAO= new articleDAO;
    $articles= $articleDAO->ShowArticle($id);

    $menuDAO= new menuDAO;
    $menus= $menuDAO->GetAll();
   
    
   
    $template='article_modifier';
    include'layout.phtml';
 ?>