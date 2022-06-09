<?php 
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<div class="row ">
<div class="col-lg-8 m-auto mt-3">
<div class="card border-success bg-info ">
  <div class="card-body">
    <h5 class="card-title">SignUp</h5>
    <form action=""  method="POST">
    <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >    
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