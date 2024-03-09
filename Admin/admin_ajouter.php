<?php

 include '../class/database.php';
 require '../class/admin.php';
 require '../class/adminDAO.php';
 
$adminDAO= new AdminDAO();

 $ajouter_ok=0;
 if(isset($_POST['ajouter'])){
     
     $Noms=htmlspecialchars($_POST['Noms']);
     $Prenoms=htmlspecialchars($_POST['Prenoms']);
     $Ville=htmlspecialchars($_POST['Ville']);
     $Email=htmlspecialchars($_POST['Email']);
     $pw=htmlspecialchars($_POST['MotdePasse']);

     $MotdePasse = password_hash($pw, PASSWORD_DEFAULT);
     
     //$adminDAO = new adminDAO;
     $admins = new Admin(0,$Noms,$Prenoms,$Ville,$Email,$MotdePasse);
     $adminDAO->add($admins);
      
    
     $ajouter_ok=1;

  }







$template="admin_ajouter";
include "layout.phtml";

?>