<?php
class Membre{
	private $id;
	private $civilite;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $email;
	private $pseudo;
	private $motdepasse;
	private $adresse;
	private $cp;
	private $ville;

	public function __construct($id,$civilite,$nom,$prenom,$date_naissance,$email,$pseudo,$motdepasse,$adresse,$cp,$ville){
		$this->id=$id;
		$this->civilite=$civilite;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->email=$email;
		$this->pseudo=$pseudo;
		$this->motdepasse=$motdepasse;
		$this->adresse=$adresse;
		$this->cp=$cp;
		$this->ville=$ville;
	}
	

	public function getid(){
		return $this->id;
	}

	public function getcivilite(){
		return $this->civilite;
	}
	public function setcivilite($civilite){
		$this->civilite=$civilite;
	}

	public function getnom(){
		return $this->nom;
	}
	public function setnom($nom){
		$this->nom=$nom;
	}

	public function getprenom(){
		return $this->prenom;
	}
	public function setprenom($prenom){
		$this->prenom=$prenom;
	}

	public function getdate_naissance(){
		return $this->date_naissance;
	}
	public function setdate_naissance($date_naissance){
		$this->date_naissance=$date_naissance;
	}

	public function getemail(){
		return $this->email;
	}
	public function setemail($email){
		$this->email=$email;
	}

	public function getpseudo(){
		return $this->pseudo;
	}
	public function setpseudo($pseudo){
		$this->pseudo=$pseudo;
	}

	public function getmotdepasse(){
		return $this->motdepasse;
	}
	public function setmotdepasse($motdepasse){
		$this->motdepasse=$motdepasse;
	}

	public function getadresse(){
		return $this->adresse;
	}
	public function setadresse($adresse){
		$this->adresse=$adresse;
	}

	public function getcp(){
		return $this->cp;
	}
	public function setcp($cp){
		$this->cp=$cp;
	}

	public function getville(){
		return $this->ville;
	}
	public function setville($ville){
		$this->ville=$ville;
	}
	
	
}
?>