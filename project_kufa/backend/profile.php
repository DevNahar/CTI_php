<?php
require_once 'header2.php';


?>

                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Profile</h1>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-xl-6">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Profile Name<span class="badge badge-success badge-style-light"> </span></h5>
                                    </div>
                                   
                                    <div class="card-body"> 
                                                                      
                                        <form action="profile_post.php" method="POST">
                                            <div class="example-container">
                                                <div class="example-content">

                                                
                                                    <input type="hidden" class="form-control"  value="<?=$_SESSION['check_id']?>" name="id">
                                                    <label  class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" value="<?=$_SESSION['check_name']?>">
                                                    <button type="submit" class="btn btn-primary mt-3" name="nm_cng_btn">Change name</button>
                                                </div>
                                            
                                            </div>
                                        </form>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                          
                            <div class="col-xl-6">
                                <div class="card widget widget-payment-request">
                                    <div class="card-header">
                                        <h5 class="card-title">Profile Image<span class="badge badge-warning badge-style-light"></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_SESSION['inv_extention'])){?>
                                            <div class="alert alert-warning"><?=$_SESSION['inv_extention']?></div>
                                        <?php
                                        }unset($_SESSION['inv_extention']);
                                        ?>
                                         <?php
                                        if(isset($_SESSION['size'])){?>
                                            <div class="alert alert-warning"><?=$_SESSION['size']?></div>
                                        <?php
                                        }unset($_SESSION['size']);
                                        ?>
                                         <?php
                                        if(isset($_SESSION['photo'])){?>
                                            <div class="alert alert-success"><?=$_SESSION['photo']?></div>
                                        <?php
                                        }unset($_SESSION['photo']);
                                        ?>
                                        
                                        <form action="profile_photo_post.php" method="POST" enctype="multipart/form-data">
                                                <div class="example-container">
                                                    <div class="example-content">
                                                    <input type="hidden" class="form-control"  value="<?=$_SESSION['check_id']?>" name="id">
                                                        <label  class="form-label">Upload your image</label>
                                                        <input onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" name="image_upload" >
                                                        <img id="blah" alt="your image" width="100" height="100" />
                                                        
                                                        <button type="submit" class="btn btn-primary mt-3 " name="img_upld_btn">Upload image</button>
                                                    </div>
                                                
                                                </div>
                                            </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">                         
                                
                                    <div class="card-body">
                                    <?php
                                        if(isset($_SESSION['passSuccess'])){?>
                                            <div class="alert alert-warning"><?=$_SESSION['passSuccess']?></div>
                                        <?php
                                        }unset($_SESSION['passSuccess']);
                                        ?>                              
                                        <form action="pass_post.php" method="POST">
                                            <div class="example-container">
                                                <div class="example-content">
                                                    <input type="hidden" class="form-control"  value="<?=$_SESSION['check_id']?>" name="id">                                               
                                                    <label  class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" >
                                                    <button type="submit" class="btn btn-primary mt-3" name="nm_cng_btn">Change password</button>
                                                </div>
                                            
                                            </div>
                                        </form>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
<?php
require_once 'footer2.php';

?>
               
    