<?php
class Article{
	private $id;
	private $titre;
	private $menu_id;
	private $texte;
	private $image;


	public function __construct($id,$titre,$menu_id,$texte,$image){
		$this->id=$id;
		$this->titre=$titre;
		$this->menu_id=$menu_id;
		$this->texte=$texte;
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
	public function getmenu_id(){
	    return $this->menu_id;
	}
	public function setmenu_id($menu_id){
	    $this->menu_id=$menu_id;
	}
	public function gettexte(){
	    return $this->texte;
	}
	public function settexte($texte){
	    $this->texte=$texte;
	}
	public function getimage(){
	    return $this->image;
	}
	public function setimage($image){
	    $this->image=$image;
	}

}


?>