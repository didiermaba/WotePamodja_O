<?php

include '../class/database.php';
require '../class/articleDAO.php';
require '../class/article.php';
require '../class/menuDAO.php';
require '../class/menu.php';

$menuDAO = new MenuDAO();
$articleDAO = new ArticleDAO(); 

$ajoutPro = 0;
if (isset($_POST['AjouterArticle'])) {

    $titre = $_POST['titre'];
    $menid = $_POST['menu_id'];
    $text = $_POST['text'];
    $image = $_POST['image'];

    $article = new Article(0,$menid,$text,$titre,$image);
    $articleDAO->add($article);
   
$ajoutPro = 1;
}

$listMenu = $menuDAO->GetAll();

$template = 'article_ajouter';
include 'layout.phtml';

?>