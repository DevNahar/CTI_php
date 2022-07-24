<?php 
require_once '../../db.php';
require_once '../header.php'; 

$id= $_GET['id'];
$select= "SELECT * FROM banners WHERE id=$id";
$select_query=mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-xl-6 m-auto">
            <div class="card widget widget-list">
                <?php if(isset($_SESSION['invalid_ext'])){ ?>
                    <div class="alert alert-warning"><?= $_SESSION['invalid_ext']?></div>
                    <?php  } unset($_SESSION['invalid_ext']) ?>
                    <?php if(isset($_SESSION['invalid_size'])){ ?>
                    <div class="alert alert-warning"><?= $_SESSION['invalid_size']?></div>
                    <?php  } unset($_SESSION['invalid_size']) ?>
                    
                <div class="card-header">
                    <h5 class="card-title">Edit Banner<span class="badge badge-success badge-style-light"> </span></h5>
                </div>
                <?PHP if(isset($_SESSION['invalid_ext'])){?>
                    <div class="alert alert-warning"><?=$_SESSION['invalid_ext']?></div>

                <?PHP }unset($_SESSION['invalid_ext'])?>
                <div class="card-body">

                    <form action="update_banner.php" method="POST" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content">
                            <?php foreach($select_query as $select){?>
                                <div class="form-group my-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="hidden" class="form-control"   name="id" value="<?=$select['id']?>">
                                    <input type="text" class="form-control"  name="sub_title" value="<?=$select['sub_title']?>">
                                    
                                </div>
                                
                                <div class="form-group my-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="<?=$select['title']?>">
                                
                                </div>
                                <div class="form-group my-3">
                                    <label class="form-label">Sort Description</label>
                                    <input type="text" class="form-control" name="descp" value="<?=$select['descp']?>">
                                </div>
                                <div class="form-group my-3">
                                    <label class="form-label">Banner Image</label>
                                    <input type="file" class="form-control" name="banner_image" onchange="document.getElementById('new_image').src = window.URL.createObjectURL(this.files[0])">
                                    <img class="mt-3" id="new_image" src="../../uploads/banner_image/<?=$select['banner_image']?>" alt="" width="70">
                                </div>
                               
                              
                               <?php }?>
                                <button type="submit" class="btn btn-primary mt-3" name="banner_update">update Banner</button>
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