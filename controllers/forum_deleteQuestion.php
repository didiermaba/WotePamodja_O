<?php 

include "header.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";

    $questionDAO = new QuestionDAO;
 //Vérification si l'id est rentré en parametre ds l'url
 if(isset($_GET['id'])){
    //L'id de la question en paramètre
    $id = $_GET['id'];
            //Supprimer la question en fonction de son id rentré en paramètre
            $questionDAO->DeleteQuestion($id);
            //Rediriger le user vers ses questions
            header('Location:index.php?action=my-question');
 }


?>