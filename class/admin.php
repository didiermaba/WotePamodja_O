<?php 

class Admin{

    private $id;
	private $Noms;
	private $Prenoms;
	private $Ville;
	private $Email;
    private $MotdePasse;

    public function __construct($id,$Noms,$Prenoms,$Ville,$Email,$MotdePasse)
    {
        $this->id=$id;
        $this->Noms=$Noms;
        $this->Prenoms=$Prenoms;
        $this->Ville=$Ville;
        $this->Email=$Email;
        $this->MotdePasse=$MotdePasse;
    }
     
    public function getid(){
        return $this->id;
    }

    public function getNoms(){
        return $this->Noms;
    }
    
    public function setNoms($Noms){
        $this->Noms=$Noms;
        
    }

    public function getPrenoms(){
        return $this->Prenoms;
    }

    public function setPrenoms($Prenoms){
        $this->Prenoms=$Prenoms;
    }

    public function getVille(){
        return $this->Ville;
    }
    
    public function setville($Ville){
        $this->Ville=$Ville;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function setEmail(){
        $this->Email=$Email;
    }

    public function getMotdePasse(){
        return $this->MotdePasse;
    }

    public function setMotdePasse($MotdePasse){
         $this->MotdePasse=$MotdePasse;
         

    }
}

?>