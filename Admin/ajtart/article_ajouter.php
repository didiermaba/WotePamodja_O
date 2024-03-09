<?php
include '../bdd_connection.php';

    $query =  'SELECT * FROM menu';
    $resultSet = $pdo->query($query);
    $menus = $resultSet->fetchAll();
    
$ajoutArt=0;


if(isset($_POST['AjouterArticle'])){

	$titre=$_POST['titre'];
	$texte=$_POST['texte'];
	$menu_id=$_POST['menu_id'];
	$image=$_POST['image'];

	$query="INSERT INTO article (titre,texte,menu_id,image) values(?,?,?,?,?)";
	$resultSet=$pdo->prepare($query);
	$resultSet->execute([$titre,$texte,$menu_id,$image]);

	$ajoutArt=1;
}

  
    

$template="article_ajouter";
include 'layout.phtml';
?>