<?php
//DAO:patron de conception,c’est-à-dire un modèle pour concevoir une solution, utilisé dans les architectures logicielles objet.

    /* Le modèle DAO propose de regrouper les accès aux données persistantes dans des classes à part(classDAO), plutôt que de les disperser. Il s'agit surtout de ne pas écrire ces accès dans les classes "métier== ex:class produit", qui ne seront modifiées que si les règles de gestion métier changent.*/

// il  faut creer un seul DAO pour les 2 parties admin(back) et client(font)

class MembreDAO{
	

	public function add(membre $membre){
		$query=Database :: connect()->prepare("INSERT INTO membre (civilite,nom,prenom,date_naissance,email,pseudo,motdepasse,adresse,cp,ville)  VALUES(?,?,?,?,?,?,?,?,?,?)");
        $query->execute([$membre->getcivilite(),$membre->getnom(),$membre->getprenom(),$membre->getdate_naissance(),$membre->getemail(),$membre->getpseudo(),$membre->getmotdepasse(),$membre->getadresse(),$membre->getcp(),$membre->getville()]);

	}
	
	public function GetByEmail( $Email){
		$query=Database :: connect()->prepare("SELECT * FROM membre where Email=?");
		$query->execute([$Email]);
		$membre=$query->fetch();
		return $membre;

	}

	public function ListMembers()
    {
        $query = Database::connect()->prepare("SELECT * FROM membre");
        $query->execute();
        $Members = $query->fetchAll();
        return $Members;
    }
    
	
}


?>