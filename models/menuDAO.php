<?php
   class MenuDAO{

      public function ShowMen(){
      /*$query= Database :: connect()->prepare("SELECT * FROM categorie");
      $query->execute()
      $men=$query->fetchAll();
      return $men;*/

      $query="select * from menu";
      $resul= Database :: connect()->query($query);
      $men=$resul->fetchAll();
      return $men;
   }

   	public function add($menu){
   		$query= Database :: connect()->prepare("INSERT INTO menu(titre) VALUES (?)");
   		//on utilise getTitre pour acceder a la propriete titre qui est proteger grace au private
   		$query->execute([$menu->getTitre()]);
   		

   	}
   	public function GetAll(){
   		$query= Database :: connect()->prepare("SELECT * FROM menu");
   		$query->execute();
   		$menus=$query->fetchAll();
   		return $menus;
   	}
      public function delete($id){
         $query= Database :: connect()->prepare("DELETE FROM menu where id=?");
         $query->execute([$id]);
      }
      public function Update($menu){
         $query= Database :: connect()->prepare(" UPDATE menu SET titre=? where id=?");
         $query->execute([$menu->getTitre(),$menu->getId()]);
      }




   }


?>