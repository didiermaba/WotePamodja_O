<?php 

include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";


//Vérifier si l'id de la question est bien passé en paramètre ds l'url
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    // vérifier si la question existe
    $questionDAO = new QuestionDAO;
    $questionExists = $questionDAO->QuestionExists($idOfTheQuestion);

    if($questionExists->rowCount() > 0){
        //Récuperer les données de la question
        $questionInfos = $questionExists->fetch();
        if($questionInfos['id_auteur'] == $_SESSION['id']){
            
            $question_title = $questionInfos['titre'];
            $question_description = $questionInfos['description'];
            $question_content = $questionInfos['contenu'];

            // fx str_replace pr éviter que les sauts de lignes du texte inseré ds le formulaire soient visible ds l'IHM
            $question_description = str_replace(
                                       '<br />',
                                        '',
                                        $question_description,
                                       );
            $question_content = str_replace(
                                       '<br />',
                                        '',
                                        $question_content,
                                       );

        }else{
            $errorMsg ="Vous n'êtes pas l'auteur de cette question";
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée";
} 

}else{
    $errorMsg = "Aucune question n'a été trouvée";
} 



$template='www/forum_editQuestion';
include 'www/layout.phtml';

?>


