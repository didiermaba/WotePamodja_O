<?php

class Answers{
    private $id;
    private $id_auteur;
    private $prenom_auteur;
    private $id_question;
    private $contenu;

    public function __construct($id,$id_auteur,$prenom_auteur,$id_question,$contenu){
        $this->id=$id;
        $this->id_auteur=$id_auteur;
        $this->prenom_auteur=$prenom_auteur;
        $this->id_question=$id_question;
        $this->contenu=$contenu;
    }

    public function getid(){
        return $this->id;
    }
    public function getid_auteur(){
        return $this->id_auteur;
    }
    public function setid_auteur($id_auteur){
        $this->id_auteur=$id_auteur;
    }
    public function getprenom_auteur(){
        return $this->prenom_auteur;
    }
    public function setprenom_auteur($prenom_auteur){
        $this->prenom_auteur=$prenom_auteur;
    }
    public function getid_question(){
        return $this->id_question;
    }
    public function setid_question($id_question){
        $this->id_question=$id_question; 
    }
    public function getcontenu(){
        return $this->contenu;
    }
    //Ajout de l'argument $contenu dans le setteur
    public function setcontenu($contenu){
        $this->contenu = $contenu;
    }
}

?>