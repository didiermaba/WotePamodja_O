<?php


include '../class/database.php';
 require '../class/AdminDAO.php';
 require '../class/Admin.php';
 
 $adminDAO = new adminDAO;
 $admins = $adminDAO->Delete($id);

   
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        
    }
 

 
$template="admin_liste";
include 'layout.phtml';
?>

