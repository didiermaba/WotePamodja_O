<?php  

include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";
include "models/forum_answers.php";
include "models/forum_answersDAO.php";

$answerDAO = new AnswerDAO();
// Récupération des questions par défaut sans recherche
$questionDAO = new QuestionDAO;
$AllQuestions = $questionDAO->AllQuestions();

//Vérification si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) && !empty($_GET['search'])){

    //La recherche(donnée à rechercher)
    $usersSearch = $_GET['search'];

    //Récupérer ttes les questions qui correspondent à la recherche
    $AllWantedQuestions = $questionDAO->SearchedQuestion($motcle);
}

$nbrComments = array();
foreach ($AllQuestions as $question) {
    $idQuestion = $question['id'];
    $nbrComments[$idQuestion] = $answerDAO->NbrCommentsByQuestion($idQuestion);
}


$template='www/forum';
include 'www/layout.phtml';

?>