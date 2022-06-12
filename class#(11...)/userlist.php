<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';

require_once 'includes/db.php';


$select = "SELECT * FROM users WHERE status = 0 ";
$slc_Query =  mysqli_query($bd_connect, $select);

?>


<div class="row ">
  <div class="col-lg-8 m-auto mt-3">
    <div class="card border-success  ">
      <div class="card-body bg-info">
        <h5 class="card-title">Userlist</h5>

        <table class="table border border-dark bg-light">
          <thead>
            <tr class="table-primary">
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th colspan="3">Action</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($slc_Query as $all_data) {
              
            ?>
                <tr>
                  <th scope="row"><?=$all_data["ID"]?></th>
                  <td><?=$all_data["NAME"]?></td>
                  <td><?=$all_data["EMAIL"]?></td> 
                  <td><a href="edit.php?id=<?=$all_data['ID']?>" class="btn btn-primary">Edit</a> </td> 
                  <td><a href="soft_delete.php?id=<?=$all_data['ID']?>" class="btn btn-danger">Delete</a>
                 </td>
                
                  <td><a href="trash.php?id=<?=$all_data['ID']?>" class="btn btn-info">Trash</a>
                 </td>  
                                  
                </tr>

            <?php
              
            }
            ?>

          </tbody>

          <?php
          if($slc_Query->num_rows==0){?>
          <tr>
            <td colspan="4" class=" text-center"><?="No data found"?></td>
          </tr>
          <?php
          }?>

        </table>


      </div>
    </div>
  </div>
</div>


<?php
require_once 'includes/footer.php';

?>