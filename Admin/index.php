<?php
session_start();
    include '../class/database.php';
    require '../class/adminDAO.php';
    require '../class/admin.php';
    //require '../class/articleDAO.php';
    //require '../class/article.php';
    //require '../class/menuDAO.php';
    //require '../class/menu.php';
    //require '../class/membreDAO.php';
    //require '../class/membre.php';

    $adminDAO = new AdminDAO;

    $connexion_error = 0;
    if (isset($_POST['login'])) {
        //recuperer la saisie de l utilisateur
    
        $Nom = htmlspecialchars($_POST['user']);
        $pass = htmlspecialchars($_POST['password']);
        
    
        
    
        $admins = $adminDAO->ShowAdminName($Nom);
        //faire la comparaison avec l'email - le mot de passe est comparer plus bas
        // $query = $pdo->prepare("SELECT * FROM administrateur where Nom=?");
        // $query->execute([$nom]);
        // $user = $query->fetch();
    
    
        if (isset($admins['Noms'])) {
            //var_dump($Nom);
            //var_dump($pass);
            //initialisation de session si le mot de passe dehashé correspond
            if (password_verify($pass, $admins['MotdePasse'])) {
                $_SESSION['admin_id'] = $admins['id'];
                $_SESSION['admin_nom'] = $admins['Noms'];
               /* $_SESSION['admin_pass'] = $admins['MotdePasse'];
                
                $_SESSION['admin_prenom'] = $admins['Prenoms'];
                $_SESSION['admin_ville'] = $admins['Ville'];
                // $_SESSION['admin_email'] = $admins['Email'];*/
                header('location:board.php');
            }
        } else {
            $connexion_error = 1;
        }
    }
    $template= 'index';
    include "index.phtml";
    
 ?>  