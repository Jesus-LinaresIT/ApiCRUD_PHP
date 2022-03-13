<?php

require_once "conectionsDB.php";


Class User{

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
}