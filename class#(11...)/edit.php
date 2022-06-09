<?php 
require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';

$id = $_GET['id'];
$select = "SELECT ID, NAME, EMAIL FROM users WHERE ID = $id";
$slc_Query =  mysqli_query($bd_connect, $select);
$rowdata = mysqli_fetch_assoc($slc_Query);
$rowid = $rowdata['ID'];
$rowname = $rowdata['NAME'];
$rowemail = $rowdata['EMAIL'];



?>


<div class="row ">
<div class="col-lg-8 m-auto mt-3">
<div class="card border-success bg-info ">
  <div class="card-body">
    <h5 class="card-title">SignUp</h5>
    <form action="update.php?id=<?=$rowid?>"  method="POST">
    <div class="mb-3">
    
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?=$rowname?>">    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?=$rowemail?>" >    
  </div>
  
  <button type="submit" class="btn btn-primary" name="update">Update</button>
  
</form>

   
  </div>
</div>
</div>
</div>


<?php 
require_once 'includes/footer.php';

?>