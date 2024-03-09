<?php


   class MenuDAO{

      public function ShowMen(){
      $query="select * from menu";
      $resul= Database :: connect()->query($query);
      $Men=$resul->fetchAll();
      return $Men;
   }

   	public function add(menu $menu){
   		$query= Database :: connect()->prepare("INSERT INTO menu(titre) VALUES (?)");
   		$query->execute([$menu->getTitre()]);
   		
   	}

      ///////////////////////////////////
   	public function GetAll(){
   		$query= Database :: connect()->prepare("SELECT * FROM menu");
   		$query->execute();
   		$menus=$query->fetchAll();
   		return $menus;
   	}
      public function delete(int $id){
         $query= Database :: connect()->prepare("DELETE FROM menu where id=?");
         $query->execute([$id]);
      }
      public function Update(menu $menu){
         $query= Database :: connect()->prepare("UPDATE menu SET titre=? where id=?");
         $query->execute([$menu->getTitre(),$menu->getId()]);
      }
   }


?>

