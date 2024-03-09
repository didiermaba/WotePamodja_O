<?php

include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";


$membreDAO= new MembreDAO;


// Vérifier si l'id éxiste et n'est pas vide
if(isset($_GET['id']) && !empty($_GET['id'])){
     
    // Récuperer l'id du user
    $idOfMember = $_GET['id'];
  
    //afficher le profile
    $membre=$membreDAO->Profile($idOfMember);


    if($membre->rowCount() > 0){
        
        //Récuperer ttes les données de l'utilisateur
        $membersInfos = $membre->fetch();
        
        $member_lastname = $membersInfos['nom'];
        $member_firstname = $membersInfos['prenom'];
        $member_pseudo = $membersInfos['pseudo'];
       

      $questionDAO = new QuestionDAO;

      //Pécuperer ttes les questions publiées par l'utilisateur
      $getHisQuestions = $questionDAO->UserQuestions($id_auteur);

    }else{
        $errorMsg = "Aucun utlisateur trouvé";
    }

}else{
    $errorMsg = "Aucun utlisateur trouvé";
}



$template='www/profile';
include 'www/layout.phtml';

?>