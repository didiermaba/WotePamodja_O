<?php
     
 include '../class/database.php';
   require '../class/membreDAO.php';
   
    $membreDAO=new membreDAO;
    $membre=$membreDAO->ListMembers();

 

 
 $template='membre_liste';
 include'layout.phtml'
 

?>