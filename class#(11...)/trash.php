<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';

require_once 'includes/db.php';


$trash_select = "SELECT * FROM users WHERE status = 1 ";
$slc_Query_trash =  mysqli_query($bd_connect, $trash_select);

?>


<div class="row ">
  <div class="col-lg-8 m-auto mt-3">
    <div class="card border-success  ">
      <div class="card-body bg-info">
        <h5 class="card-title">Trash Userlist</h5>

        <table class="table bg-light">
          <?php
          if ($slc_Query_trash->num_rows == 0) { ?>
            <tr>
              <td colspan="4" class=" text-center"><?= "No data found" ?></td>
            </tr>
          <?php
          } ?>

          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th colspan="3">action</th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($slc_Query_trash as $all_data) {

            ?>
              <tr>
                <th scope="row"><?= $all_data["ID"] ?></th>
                <td><?= $all_data["NAME"] ?></td>
                <td><?= $all_data["EMAIL"] ?></td>
                <td><a href="soft_delete.php?id=<?= $all_data['ID'] ?>" class="btn btn-success">Restore</a> </td>
                <td><button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $all_data["ID"] ?>" class="btn btn-danger ">Delete</button>
                </td>



              </tr>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $all_data["ID"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                   
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <a href="delete.php?id=<?=$all_data['ID']?>" class="btn btn-danger">Yes, Delete</a>
 
                    </div>
                  </div>
                </div>
              </div>

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