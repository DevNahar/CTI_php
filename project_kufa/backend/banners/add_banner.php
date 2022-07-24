<?php 
require_once '../../db.php';
require_once '../header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card widget widget-list">
                <?php if(isset($_SESSION['invalid_ext'])){ ?>
                    <div class="alert alert-warning"><?= $_SESSION['invalid_ext']?></div>
                    <?php  } unset($_SESSION['invalid_ext']) ?>
                    
                <div class="card-header">
                    <h5 class="card-title">Add Banner<span class="badge badge-success badge-style-light"> </span></h5>
                </div>

                <div class="card-body">

                    <form action="banner_controller.php" method="POST" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                            
                                <div class="form-group my-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="text" class="form-control"  name="sub_title">
                                    
                                </div>
                                
                                <div class="form-group my-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title">
                                
                                </div>
                                <div class="form-group my-3">
                                    <label class="form-label">Sort Description</label>
                                    <input type="text" class="form-control" name="descp">
                                </div>
                                <div class="form-group my-3">
                                    <label class="form-label">Banner Image</label>
                                    <input type="file" class="form-control" name="banner_image" onchange="document.getElementById('add_image').src = window.URL.createObjectURL(this.files[0])">
                                    <img class="mt-3" width="80" id="add_image" src="" alt="">                               
                                    
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-3" name="banner_insert">Add Banner</button>
                                <a href="banner_list.php" class="btn btn-primary mt-3" name="">Back Banner List</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>