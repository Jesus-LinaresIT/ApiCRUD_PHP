<?php

Class ControllerUser{

   /*==================================
      Register Users
   ==================================*/
   static public function ctrCreate(){

      if(isset($_POST["rgsUser"])){

         $table = 'data_registers';

         $data = array("username" => $_POST["rgsUser"],
                     "email" => $_POST["rgsEmail"],
                     "password" => $_POST["rgsPassword"]);

         $response = User::mdlCreateUser($table, $data);

         return $response;
      }
   }

   /*==================================
      Get Users
   ==================================*/
   static public function ctrGetDataUser(){
      $table = 'data_registers';

      $response = User::mdlGetUsers($table);

      return $response;
   }

}
