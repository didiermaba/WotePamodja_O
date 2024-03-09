<?php
require('models/database.php');
require('models/forum_answers.php');
require('models/forum_answersDAO.php');

$answerDAO = new AnswerDAO();


if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    $idQuestion=$_GET['idquestion'];
    $answerDAO->DeleteCommentById($id);    


    header("location:index.php?action=forum_showArticleContents&id=$idQuestion");    
}