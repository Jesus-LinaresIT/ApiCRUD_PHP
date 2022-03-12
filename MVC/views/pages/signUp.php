<div class="d-flex justify-content-center">
   <form class="p-4 bg-light" method="post">
      <div class="form-group">
         <label for="username">Username:</label>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text">
               <i class="fa-solid fa-user"></i>
               </span>
            </div>
            <input type="text" class="form-control"
                  placeholder="Enter username" id="user" name="rgsUser">
         </div>
      </div>

      <div class="form-group">
         <label for="email">Email address:</label>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text">
               <i class="fa-solid fa-envelope"></i>
               </span>
            </div>
            <input type="email" class="form-control"
                  placeholder="Enter email" id="email" name="rgsEmail">
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
            <input type="password" class="form-control"
                  placeholder="Enter password" id="pwd" name="rgsPassword">
         </div>
      </div>

      <?php

      $register = ControllerForm::ctrRegister();
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

      <button type="submit" class="btn btn-primary">Sign up</button>
   </form>
</div>