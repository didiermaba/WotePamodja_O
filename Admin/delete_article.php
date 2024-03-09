<?php

include 'class/database.php';
 require 'class/articleDAO.php';
 require 'class/article.php';
 require 'class/menuDAO.php';
 require 'class/menu.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $articleDAO= new articleDAO;
    $arti=$articleDAO->Delete($id);
    
    /*$query = $pdo->prepare("DELETE FROM article WHERE id=?");
    $query->execute([$id]);*/


    header("location:article_liste.php");
}

?>