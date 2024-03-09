<?php


include "header.php";
include "models/membre.php";
include "models/membreDAO.php";

$membreDAO= new MembreDAO;
//Inscription
    $inscription_ok=0;
    // Si l'utisateur clique sur le bouton Inscription
    if(isset($_POST['inscription'])){
        //récuperation
        $civilite=htmlspecialchars($_POST['civilite']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $date_naissance=htmlspecialchars($_POST['date_naissance']);
        $email=htmlspecialchars($_POST['email']);
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $motdepasse=htmlspecialchars($_POST['motdepasse']);
        $adresse=htmlspecialchars($_POST['adresse']);
        $cp=htmlspecialchars($_POST['cp']);
        $ville=htmlspecialchars($_POST['ville']);


        $password_h=password_hash($motdepasse, PASSWORD_DEFAULT);
        //creation de l'objet
        $Membre = new Membre(0,$civilite,$nom,$prenom,$date_naissance,$email,$pseudo,$password_h,$adresse,$cp,$ville);
        //stockage de l'objet
        $membreDAO->add($Membre);

        $inscription_ok=1;
    }
//connexion
$connexion_error=0;

if(isset($_POST['connexion'])){
    $cemail=htmlspecialchars($_POST['cemail']);
    $cpasse=htmlspecialchars($_POST['cpassword']);

  $membre=$membreDAO->connexion($cemail,$cpasse);
  if($membre==null){
    $connexion_error=1;
  }else{
      $_SESSION['login_prenom']=$membre->getprenom();
      $_SESSION['login_id']=$membre->getid();
      header("location:index.php");
  }
 


}






$template="www/login";
include "www/layout.phtml";
?>