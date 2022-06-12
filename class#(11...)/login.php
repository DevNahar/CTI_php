<?php session_start();
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<div class="row ">
  <div class="col-lg-8 m-auto mt-3">
    <div class="card border-success bg-info ">

      <?php
      if (isset($_SESSION['logout'])) {
      ?>
        <div class="alert alert-success "><?= $_SESSION['logout'] ?>
          <div>
          <?php
          unset($_SESSION['logout']);
        }
          ?>
          <div class="card-body">

            <form action="login_post.php" method="POST">



              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
              </div>
              <?php
              if (isset($_SESSION['wrong_mail'])) {
              ?>
                <div> <span class="card-title text-danger mb-5"><?= $_SESSION['wrong_mail'] ?></span>
                  <div>
                  <?php
                  unset($_SESSION['wrong_mail']);
                }
                  ?>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <?php
                  if (isset($_SESSION['wrong_pass'])) {
                  ?>
                    <div> <span class=" text-danger mb-5"><?= $_SESSION['wrong_pass'] ?></span>
                      <div>

                      <?php
                      unset($_SESSION['wrong_pass']);
                    }
                      ?>

                      <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
                      <button type="Reset" class="btn btn-primary mt-3">Reset</button>
            </form>


          </div>
          </div>
        </div>
    </div>


    <?php
    require_once 'includes/footer.php';

    ?>