<?php

include "header.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";

$id = isset($_SESSION['login_id']) ? $_SESSION['login_id'] : null;

if ($id !== null) {
  $questionDAO = new QuestionDAO;
  $AllMyQuestions = $questionDAO->MyQuestions($id);
}

if (isset($modif_ok) && $modif_ok!=1){
  $modif_ok=0;
}

$template = 'www/forum_myQuestion';
include 'www/layout.phtml';
?>
