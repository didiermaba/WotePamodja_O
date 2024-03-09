<?php
class Database {
    
    // proprietes
    public static $bdd;
   
    //
    public static function connect(){
        try{
        // self::$bdd = new PDO('mysql:host=localhost;dbname=wote;charset=utf8',"root","");
        self::$bdd = new PDO('mysql:host=mysql-maba.alwaysdata.net;dbname=maba_wote;charset=UTF8','maba','0815132719Mm');
        }
        catch(Exception $erreur){
            die("ERROR connexion a la base de donnée:" .$erreur->getMessage());
        }
        return self::$bdd;
    }    
}

?>