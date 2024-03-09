<?php

class Question{

   private $id;  
   private $titre;  
   private $description;  
   private $contenu;  
   private $id_auteur;  
   private $prenom_auteur;  
   private $date_publication;  


   public function  __construct($id,$titre,$description,$contenu,$id_auteur,$prenom_auteur,$date_publication){
    $this->id=$id;
    $this->titre=$titre;
    $this->description=$description;
    $this->contenu=$contenu;
    $this->id_auteur=$id_auteur;
    $this->prenom_auteur=$prenom_auteur;
    $this->date_publication=$date_publication;
   }
   public function getId(){
    return $this->id;
   }
   public function getTitre(){
    return $this->titre;
   }
   public function setTitre($titre){
    $this->titre=$titre;
   }
   public function getdescription(){
    return $this->description;
   }
   public function setdescription($description){
    $this->description=$description;
   }
   public function getcontenu(){
    return $this->contenu;
   }
   public function setcontenu($contenu){
    $this->contenu=$contenu;
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
   public function getdate_publication(){
    return $this->date_publication;
   }
   public function setdate_publication($date_publication){
    $this->date_publication=$date_publication;
   }

}

?> 