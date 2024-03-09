<?php

include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";

$questionDAO = new QuestionDAO();

//valider le formulaire
if(isset($_POST['validate'])){

    // vérifier si les champs ne sont pas vides
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){
        
        //Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y');
        $question_id_author = $_SESSION['login_id'];
        $question_prenom_author = $_SESSION['login_prenom']; 
        
         //Insérer la question sur le site
        $question = new Question(null, $question_title,$question_description,$question_content,$question_id_author,$question_prenom_author,$question_date );
        $questionDAO->AddQuestion($question);

        $successMsg = "Votre question a bien été publiée sur le site";
}else{
    $errorMsg = 'Veillez compléter tous les champs ...';
}
    

}

$template='www/forum_publishQuestion';
include 'www/layout.phtml';

?>