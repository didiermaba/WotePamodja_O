<?php


class AnswerDAO{
// f_postComment
public function AddComment($answer){
    $query = Database :: connect()->prepare("INSERT INTO answers(id_auteur, prenom_auteur, id_question, contenu)VALUES(?, ?, ?, ?)");
    $query->execute([$answer->getid_auteur(),$answer->getprenom_auteur(),$answer->getid_question(),$answer->getcontenu()]); 
}

// $insertAnswer = $bdd->prepare("INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu)VALUES(?, ?, ?, ?)");
// $insertAnswer->execute(array($_SESSION['id'], $_SESSION['prenom'], $idOfTheQuestion, $user_answer));

// f_
public function AllCommentsOfQuestion($idOfTheQuestion){
    $query = Database :: connect()->prepare('SELECT * FROM answers WHERE id_question = ? ORDER BY id DESC');
    $query->execute([$idOfTheQuestion]);
    $getAllCommentsOfThisQuestion=$query->fetchAll();
    return $getAllCommentsOfThisQuestion;
}


	// Fonction pour récupérer le nombre de commentaires associés à une question
    public function NbrCommentsByQuestion($idQuestion)
    {
        $query = Database::connect()->prepare("SELECT COUNT(*) FROM answers WHERE id_question = :idQuestion");
        $query->bindParam(':idQuestion', $idQuestion);
        $query->execute();
        $NbrCommentsByQuestion = $query->fetchColumn(0);
        return $NbrCommentsByQuestion;
    }

    // Fonction pour supprimer un commentaire.
	public function DeleteCommentById($id)
	{
		$query = Database::connect()->prepare("DELETE FROM answers where id=?");
		$query->execute([$id]);
	}

// $getAllCommentsOfThisQuestion = $bdd->prepare('SELECT * FROM answers WHERE id_question = ? ORDER BY id DESC');
// $getAllCommentsOfThisQuestion->execute(array($idOfTheQuestion));

}

?>