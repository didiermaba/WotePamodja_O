<?php

include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";
include "models/forum_answers.php";
include "models/forum_answersDAO.php";


$questionDAO = new QuestionDAO;
$question_id = $questionDAO->QuestionById($id);

$answerDAO = new AnswerDAO;
// vérifier si le user a bien validé son form
if(isset($_POST['validate'])){ 
    // Vérifier si le user a bien tapé un comment 
    if(!empty($_POST['answer'])){
        $answer_id_author = $_SESSION['id'];
        $answer_prenom_author = $_SESSION['prenom']; 
        $answer_id_question = $question_id;
        $answer_user = nl2br(htmlspecialchars($_POST['answer']));


       $answer = new Answer($answer_id_author, $answer_prenom_author,  $answer_id_question,  $answer_user );
       $answerDAO->AddComment($answer);

    }
}


$template='www/forum_article';
include 'www/layout.phtml';


?>