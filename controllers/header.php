<?php
	session_start();
	require('./models/database.php');
    include './models/menuDAO.php';
    

	$menDAO=new MenuDAO;
	$men=$menDAO->GetAll();

	


// template
 $template1="www/header";
?>