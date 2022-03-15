<div class="d-flex justify-content-center">
   <form class="p-4 bg-light" method="post">
      <div class="form-group">
         <label for="email">Email address:</label>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text">
               <i class="fa-solid fa-envelope"></i>
               </span>
            </div>
            <input type="email" class="form-control"
                  placeholder="Enter email" id="email" name="loginEmail">
         </div>
      </div>

      <div class="form-group">
         <label for="pwd">Password:</label>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text">
               <i class="fa-solid fa-lock"></i>
               </span>
            </div>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="loginPassword">
         </div>
      </div>
      <?php

         $register = new ControllerUser();
         $register->ctrLogin();

         if ($register == "ok"){
         /*==================================
         Create script for clean alert of user register
         ==================================*/
            echo '<script>
               if ( window.history.replaceState ){
               window.history.replaceState( null, null, window.location.href );
               }
               </script>';

            echo "<div class='alert alert-success'>User was registered</div>";
         }
      ?>

      <button type="submit" class="btn btn-primary">Login</button>
   </form>
</div>
</form>