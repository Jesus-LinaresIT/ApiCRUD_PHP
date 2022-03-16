

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

      $response = User::mdlGetUsers($table, null, null);

      return $response;
   }

   /*==================================
      Login Users
   ==================================*/
   public function ctrLogin(){

      if(isset($_POST["loginEmail"])){
         $loginEmail = $_POST["loginEmail"];
         $loginPassword = $_POST["loginPassword"];

         $table = 'data_registers';
         $item = 'email';
         $value = $loginEmail;

         $response = User::mdlGetUsers($table, $item, $value);

         if($response && $response["password"] == $loginPassword){

            $_SESSION["loginValidate"] = "ok";
            echo '<script>

               if ( window.history.replaceState ){
                  window.history.replaceState( null, null, window.location.href );
               }

               window.location = "index.php?pages=home";
            </script>';
         }else{

            echo '<script>

               if ( window.history.replaceState ){
                  window.history.replaceState( null, null, window.location.href );
               }
            </script>';

            echo "<div class='alert alert-danger'>Login error, email or password incorrects</div>";
         }
      }
   }


}
