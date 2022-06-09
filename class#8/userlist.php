<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';

require_once 'includes/db.php';


$select = "SELECT ID, NAME, EMAIL FROM users";
$slc_Query =  mysqli_query($bd_connect, $select);

?>


<div class="row ">
  <div class="col-lg-8 m-auto mt-3">
    <div class="card border-success  ">
      <div class="card-body bg-info">
        <h5 class="card-title">Userlist</h5>

        <table class="table bg-light">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              
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
                  <td><a href="edit.php?id=<?=$all_data['ID']?>" class="btn btn-outline_info">Edit</a> </td> 
                  <td><a href="delete.php?id=<?=$all_data['ID']?>" class="btn btn-outline_info">Delete</a> </td> 
                                  
                </tr>

            <?php
              
            }
            ?>

          </tbody>
        </table>


      </div>
    </div>
  </div>
</div>


<?php
require_once 'includes/footer.php';

?>