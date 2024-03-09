<?php  

include "header.php";
include "models/membre.php";
include "models/membreDAO.php";
include "models/forum_questions.php";
include "models/forum_questionsDAO.php";


        $questionDAO = new QuestionDAO;

        $id = $_GET['id'];
        $modif_ok = 0;
        
        if (isset($_POST['validate'])) {
        
            $title = $_POST['title'];
            $description = $_POST['description'];
            $content = $_POST['content'];
            $modifier = $questionDAO->UpdateQuestion($title, $description, $content, $id);
        
            $_SESSION['modif_ok'] = 1;

            header('Location:index.php?action=my-question');
        }

        $question_modifier = $questionDAO->QuestionById($id);

        $template = 'www/forum_editQuestion';
        include 'www/layout.phtml';
?>