<?php

require_once "conectionsDB.php";


Class User{
   /*==================================
      Register Users
   ==================================*/

   static public function mdlCreateUser($table, $data){

      $stmt = Conections::conect()->prepare("INSERT INTO $table(username, email, password) VALUES
            (:username, :email, :password)");

      $stmt->bindParam(":username", $data['username'], PDO::PARAM_STR);
      $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
      $stmt->bindParam(":password", $data['password'], PDO::PARAM_STR);

      if($stmt->execute()){

         return "ok";

      }else{
         print_r(Conections::conect()->errorInfo());
      }

      $stmt->close();
      $stmt = null;
   }

   /*==================================
      Get Users
   ==================================*/
   static public function mdlGetUsers($table, $item, $value){

      if($item == null && $value == null){
         $stmt = Conections::conect()->prepare("SELECT *, DATE_FORMAT(date, '%d/%m/%Y')
         AS date FROM $table ORDER BY id DESC");

         try {
            $stmt->execute();

            return $stmt->fetchAll();

         }catch (Exception $e){
            echo 'Error Message: ', $e->getMessage(),"\n";
         }
      }else{
         $stmt = Conections::conect()->prepare("SELECT *, DATE_FORMAT(date, '%d/%m/%Y')
         AS date FROM $table WHERE $item = :$item ORDER BY id DESC");

         $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
         $stmt->execute();

         return $stmt->fetch();
      }

      $stmt->close();
      $stmt = null;
   }

}