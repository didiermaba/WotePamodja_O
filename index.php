<?php
//un systeme de routage pour acceder aux controlleurs afin d appeler les views et les models  
if (array_key_exists("action", $_GET)) {

    switch ($_GET['action']) {
            //si index.php?action=menu ==alors il va appeler le controlleurs menu.php qui va de son cote communiquer avec le model et faire l affichage dans la page(view)
        case "menu":
            include 'controllers/menu.php';
            break;
        case "article":
            include 'controllers/article.php';
            break;
        case "forum_deleteQuestion" :
            include 'controllers/forum_deleteQuestion.php';
            break;
            case "deleteComment" :
                include 'controllers/deleteComment.php';
                break;
        case "forum_editQuestion" :
            include 'controllers/forum_editQuestion.php';
            break;
        case "forum_getInfosOfEditedQuestion":
            include 'controllers/forum_getInfosOfEditedQuestion.php';
            break;
        case "forum_postComment":
            include 'controllers/forum_postComment.php';
            break;
        case "publish-question":
            include 'controllers/forum_publishQuestion.php';
            break;
        case "my-question":
            include 'controllers/forum_myQuestion.php';
            break;
        case "forum_showAllAnswersOfQuestion":
            include 'controllers/forum_showAllAnswersOfQuestion.php';
            break;
        case "forum_recherch":
            include 'controllers/forum_allQuestions.php';
            break;
        case "forum_showArticleContents":
            include 'controllers/forum_showArticleContents.php';
            break;
        case "forum_showMemberProfile":
            include 'controllers/forum_showMemberProfile.php';
            break;
        case "forum_allQuestions":
            include 'controllers/forum_allQuestions.php';
            break;
            // case "security" :
            //     include 'controllers/security.php';
            //     break;
        case "connexion_inscription":
            include 'controllers/login.php';
            break;
        case "recherche":
            include 'controllers/recherche.php';
            break;

        case "deconnexion":
            include 'controllers/deconnexion.php';
            break;
    }
} else {
    include 'controllers/index.php';
}
