<?php
     
 include '../class/database.php';
   require '../class/adminDAO.php';
   
    $adminDAO=new adminDAO;
    $admin=$adminDAO->ListeAdmin();

 

 
 $template='admin_liste';
 include'layout.phtml'
 

?>