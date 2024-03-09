<?php

include '../class/database.php';
 require '../class/articleDAO.php';
 require '../class/article.php';
 require '../class/menuDAO.php';
 require '../class/menu.php';


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = $pdo->prepare("DELETE FROM article WHERE menu_id=?");
    $query->execute([$id]);
    
    $articleDAO= new articleDAO;
    $arti=$articleDAO->Delete($id);

    $menuDAO= new menuDAO;
    $men=$menu->delete($id);
    
    header("location:menu_liste.php");
}
?>