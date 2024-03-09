<?php
 class MembreDAO{

 	public function add($membre){
 		$query= Database ::connect()->prepare("INSERT INTO membre (civilite,nom,prenom,date_naissance,email,pseudo,motdepasse,adresse,cp,ville)  VALUES(?,?,?,?,?,?,?,?,?,?)");
 		$query->execute([$membre->getcivilite(),$membre->getnom(),$membre->getprenom(),$membre->getdate_naissance(),$membre->getemail(),$membre->getpseudo(),$membre->getmotdepasse(),$membre->getadresse(),$membre->getcp(),$membre->getville()]);

 	}
	
    public function connexion($email,$passwordlogin){
        $query= Database :: connect()->prepare("SELECT * FROM membre where email=?");
		$query->execute([$email]);
		$obj=$query->fetch();

          if(isset($obj['id'])){
			if(password_verify($passwordlogin, $obj['motdepasse'])){	        
		        $membre=new membre($obj['id'],$obj['civilite'],$obj['nom'],$obj['prenom'],$obj['date_naissance'],$obj['email'],$obj['pseudo'],$obj['motdepasse'],$obj['adresse'],$obj['cp'],$obj['ville'],);
				return $membre;
		    }else{
			    return null;
			}
			
		}else{
			return null;
		}

	}

	//  Vérifier si l'utilisateur...  / profile
	 public function Profile($id){
		$query= Database :: connect()->prepare('SELECT nom, prenom, pseudo FROM membre WHERE id = ?');
		$query->execute([$id]);
		$checkIfMemberExists= $query->fetch();
		return $checkIfMemberExists;

	//  $checkIfMemberExists = $bdd->prepare('SELECT nom, prenom, pseudo FROM membre WHERE id = ?');
	//  $checkIfMemberExists->execute(array($idOfMember));
	 }
	 
 
 }

?>