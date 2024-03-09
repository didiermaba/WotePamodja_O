<?php

// il  faut creer un seul DAO pour les 2 parties admin et client
class ArticleDAO{
	//GetById
	public function ShowArticle($id){
		$query= Database :: connect()->prepare("SELECT * FROM article where id=?");
		$query->execute([$id]);
		$Articles=$query->fetch();
		return $Articles;
	}

	public function ArticlesSimilaires($idMen){
		$query= Database :: connect()->prepare("SELECT * FROM article where menu_id=?");
		$query-> execute([$idMen]);
		$ArticlesSml=$query->fetchAll();
		return $ArticlesSml;
	}

	//GetImages
	public function ShowImage($id){
		$query=Database :: connect()->prepare("SELECT * FROM `image` where article_id=?");
		$query->execute([$id]);
		$Images=$query->fetchAll();
		return $Images;
	}

	//GetAllByCat
	public function ShowArticle_Men($id){
		$query=Database :: connect()->prepare("SELECT * FROM article where menu_id=?");
		$query->execute([$id]);
		$Articlescat=$query->fetchAll();
		return $Articlescat;

	}

	public function Recherch($motcle){
		$query=Database :: connect()->prepare("SELECT * FROM article where titre like CONCAT('%',?,'%') ");
		$query->execute([$motcle]);
		$Artis=$query->fetchAll();
		return $Artis;

	}

	public function add($article){
		$query=Database :: connect()->prepare("INSERT INTO article (titre,,menu_id,image) VALUES(?,?,?)");
		$query->execute([$article->getTitre(),$article->getMenuId(),$article->getImage()]);

	}

	//GetAll
	public function ListeArticles(){
		$query=Database :: connect()->prepare("SELECT * FROM article");
		$query->execute();
		$Articles=$query->fetchAll();
		return $Articles;

	}
	
	// Delete
	public function Delete($id){
		$query= Database :: connect()->prepare("DELETE FROM article where id=?");
		$query->execute([$id]);

	}

	//Update
	public function Update($article){
		$query= Database :: connect()->prepare("UPDATE article SET menu_id=?,texte=?,titre=?,image=? where id=?");
		$query->execute([$article->getmenu_id(),$article->gettexte(),$article->gettitre(),$article->getimage(),$article->getid()]);
	}
}

?>