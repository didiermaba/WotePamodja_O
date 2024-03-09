<?php
   class QuestionDAO{
    
    public function MyQuestions($id){
      $query = Database :: connect()->prepare('SELECT id, titre, `description` FROM questions WHERE id_auteur= ? ORDER BY id DESC');
      $query->execute([$id]);
      $getAllMyQuestions=$query->fetchAll();
      return $getAllMyQuestions;
    }

   //  $getAllMyQuestions = $bdd->prepare('SELECT id, titre, `description` FROM questions WHERE id_auteur= ? ORDER BY id DESC');
   //  $getAllMyQuestions->execute(array($_SESSION['id']));

    //Insérer la question sur le site
    public function AddQuestion($question){
      $query = Database :: connect()->prepare('INSERT INTO questions(titre, `description`, contenu, id_auteur, prenom_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
      $query->execute([$question->gettitre(),$question->getdescription(),$question->getcontenu(),$question->getid_auteur(),$question->getprenom_auteur(),$question->getdate_publication()]);
    }


   //  $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, `description`, contenu, id_auteur, prenom_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
   //  $insertQuestionOnWebsite->execute(array($question_title, $question_description, $question_content, $question_id_author, $question_prenom_author, $question_date));


    //Modifier les informations de la question qui possède l'id rentré en paramètre ds l'url
    public function UpdateQuestion($titre, $question_description, $question_content, $id){
      $query = Database :: connect()->prepare('UPDATE questions SET titre = ?, `description` = ?, contenu = ? WHERE id = ?');
      $query->execute([$titre, $question_description, $question_content, $id]);
    }


   //  $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET titre = ?, `description` = ?, contenu = ? WHERE id = ?');
   //  $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_content, $idOfQuestion));


    //Vérification si la question existe / f_del.php
    Public function AuthorQuestionExists($idOfTheQuestion){
      $query = Database :: connect()->prepare('SELECT id_auteur FROM questions WHERE id = ?');
      $query->execute(array($idOfTheQuestion));
      $IfQuestionExists=$query->fetch();
      return $IfQuestionExists;

    }

   //  $checkIfQuestionExists = $bdd->prepare('SELECT id_auteur FROM questions WHERE id = ?');
   //  $checkIfQuestionExists->execute(array($idOfTheQuestion));


    //Supprimer la question en fonction de son id rentré en paramètre  / f_del.php
    public function DeleteQuestion($id){
      $query = Database :: connect()->prepare('DELETE FROM questions WHERE id = ?');
      $query->execute([$id]);
    }


   //  $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
   //  $deleteThisQuestion->execute(array($idOfTheQuestion));

    // Récupération des questions par défaut sans recherche - f_showAllQuestion
    public function AllQuestions(){
      $query = Database :: connect()->prepare('SELECT id, id_auteur, titre, `description`, prenom_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,9');
      $query->execute();
      $getAllQuestions=$query->fetchAll();
      return $getAllQuestions;
    }


   //  $getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');

    //Récupérer ttes les questions qui correspondent à la recherche - f_showAllQuestion
    public function SearchedQuestion($motcle){
      $query = Database :: connect()->prepare('SELECT id, id_auteur, titre, description, prenom_auteur, date_publication FROM questions WHERE titre LIKE "%'.$motcle.'%" ORDER BY id DESC');
      $query->execute([$motcle]);
      $getQuestions=$query->fetchAll();
      return $getQuestions;
    } 

   //  $getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions WHERE titre LIKE "%'.$usersSearch.'%" ORDER BY id DESC');

    // Vérifier si la question existe - f_showArticleContent
    Public function QuestionExists($id){
      $query = Database :: connect()->prepare('SELECT * FROM questions WHERE id=?');
      $query->execute([$id]);
      $checkIfQuestionExists=$query->fetch();
      return $checkIfQuestionExists;

    }
   
    public function QuestionById($id)
    {
      $query = Database::connect()->prepare('SELECT * FROM questions Where id=?');
      $query->execute([$id]);
      $question_modifier = $query->fetch();
      return $question_modifier;
    }

   //  $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
   //  $checkIfQuestionExists->execute(array($idOfTheQuestion));

    //Récuperer ttes les questions publiées par l'utilisateur - f_showUserProfile
    Public function UserQuestions($id_auteur){
      $query = Database :: connect()->prepare('SELECT * FROM questions WHERE id_auteur = ? ORDER BY id DESC');
      $query->execute([$id_auteur]);
      $getHisQuestions=$query->fetchAll();
      return $getHisQuestions;
    }

   }


?>