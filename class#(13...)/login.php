<?php session_start();
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<div class="row ">
<div class="col-lg-8 m-auto mt-3">
<div class="card border-success bg-info ">
  <div class="card-body">
  <?php
  if(isset($_SESSION['Welcome'])){      
  ?>
    <h5 class="card-title text-danger mb-2"><?=$_SESSION['Welcome']?></h5>  
  <?php
  unset($_SESSION['Welcome']);
   }
  ?>
    <form action="login_post.php"  method="POST">
    
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >    
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
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