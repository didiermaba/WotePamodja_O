<?php
   /* include '../class/database.php';
    require '../class/adminDAO.php';
    require '../class/admin.php';
   
        
   
    $adminDAO= new adminDAO;
    

    if(isset($_POST['go'])){
        

        $nom=$_POST['Nom'];
        $pass=$_POST['password'];
         
       $adminstrateurs= $adminDAO->ListeAdmin();


        if(!isset($admin['id'])){
            echo 'erreur';
        }else{
            $_SESSION['admin_id']=$admin['id'];
            $_SESSION['admin_nom']=$admin['Nom'];
            header('location:board.php');
        }

    }
   
         

    $template='login';
    include 'layout.phtml';
 ?>