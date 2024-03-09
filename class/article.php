<?php
//class metier:

class Article{

	private $id;
	private $titre;
	private $menu_id;
	private $texte;
	private $image;


	public function __construct($id,$menu_id,$texte,$titre,$image){
		$this->id=$id;
		$this->menu_id=$menu_id;
		$this->texte=$texte;
		$this->titre=$titre;
		$this->image=$image;

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
	
	public function getMenu_id(){
	    return $this->menu_id;
	}
	public function setMenu_id($menu_id){
	    $this->menu_id=$menu_id;
	}
	public function getTexte(){
	    return $this->texte;
	}
	public function setTexte($texte){
	    $this->texte=$texte;
	}
	public function getImage(){
	    return $this->image;
	}
	public function setImage($image){
	    $this->image=$image;
	}

}


?>