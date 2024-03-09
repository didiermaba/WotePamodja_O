<?php
include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";
include "models/forum_answers.php";
include "models/forum_answersDAO.php";



    $idOfTheQuestion  = $_GET['id'];
 
     // Vérifier si la question existe
    $questionDAO = new QuestionDAO;
    $existingQuestion = $questionDAO->QuestionExists($idOfTheQuestion);
 

     $answerDAO = new AnswerDAO;
     $comments = $answerDAO->AllCommentsOfQuestion($idOfTheQuestion);
 

     //Ajout du commentaires

     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["validate"])) {
        // Récupérez les données du formulaire
        $answerContent = $_POST["answer"];
        $id_author = $_SESSION['login_id'];
        $prenom_author = $_SESSION['login_prenom'];
        $id_question = $idOfTheQuestion;
        $contenu = htmlspecialchars($_POST['answer']);
    
        // Créez un objet Answer avec les données du formulaire
        $answer = new Answers(0,$id_author,$prenom_author,$id_question,$contenu);
    
        // Instanciez le DAO pour les réponses
        $answerDAO = new AnswerDAO;
    
        // Ajoutez le commentaire en base de données
        $answerDAO->AddComment($answer);
    
        // Après avoir ajouté le commentaire, on redirige l'utilisateur vers la même page
        header("Location: index.php?action=forum_showArticleContents&id=$idOfTheQuestion");
        exit;
    }



 $template='www/forum_article';
 include 'www/layout.phtml';
