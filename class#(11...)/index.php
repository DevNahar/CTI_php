<?php 
session_start();
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<div class="row ">
<div class="col-lg-8 m-auto mt-3">
<div class="card border-success bg-info ">
  <div class="card-body">
    <h5 class="card-title">SignUp</h5>
    <form action="registration.php"  method="POST">
    <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >    
  </div>

  <?php
  if(isset($_SESSION['used_email'])){      
  ?>
  <div class="text-danger mb-2"><?=$_SESSION['used_email']?>  </div>
  <?php
  unset($_SESSION['used_email']);
   }
  ?>

  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirmpassword">
  </div>
  <?php
  if(isset($_SESSION['error_pass'])){      
  ?>
  <div class="text-danger mb-2"><?=$_SESSION['error_pass']?>  </div>
  <?php
  unset($_SESSION['error_pass']);
   }
  ?>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" >
    <label class="form-check-label" >Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="Reset" class="btn btn-primary">Reset</button>
</form>

   
  </div>
</div>
</div>
</div>


<?php 
require_once 'includes/footer.php';

?>



