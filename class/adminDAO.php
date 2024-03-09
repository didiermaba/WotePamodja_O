<?php 

class AdminDAO{
    
    public function ShowAdmin($id)
    {
        $query = Database::connect()->prepare("SELECT * FROM `admin` where id=?");
        $query->execute([$id]);
        $Adminis = $query->fetch();
        return $Adminis;
    }
    public function ShowAdminName($Nom)
    {
        $query = Database::connect()->prepare("SELECT * FROM `admin` where Noms=?");
        $query->execute([$Nom]);
        $Admins = $query->fetch();
        return $Admins;
    }

    public function add($admins){
        $query = Database::connect()->prepare("INSERT INTO `admin` (Noms,Prenoms,Ville,Email,MotdePasse) VALUES(?,?,?,?,?)");
        $query->execute([$admins->getNoms(),$admins->getPrenoms(), $admins->getVille(), $admins->getEmail(), $admins->getMotdePasse()]);
    }

    public function count($membre)
    {
        $query = Database::connect()->prepare("SELECT count(Noms) from `admin` where Noms = ?");
        $query->execute([$membre]);
        $nomExist = $query->fetch();
        return $nomExist;
    }

    
    public function ListeAdmin()
    {
        $query = Database::connect()->prepare("SELECT * FROM `admin`");
        $query->execute();
        $Administrateurs = $query->fetchAll();
        return $Administrateurs;
    }
    
    public function Delete($id)
    {
        $query = Database::connect()->prepare("DELETE FROM `admin` where id=?");
        $query->execute([$id]);
    }
    
}

   