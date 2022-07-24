<?php  
    require_once '../../db.php';
    require_once '../header.php';
   
    $banner_select = "SELECT * FROM banners";
    $banners_query =  mysqli_query($db_connect, $banner_select);
?>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card widget widget-list">
                <?php if(isset($_SESSION['invalid_ext'])){ ?>
                    <div class="alert alert-warning"><?= $_SESSION['invalid_ext']?></div>
                    <?php  } unset($_SESSION['invalid_ext']) ?>
                    
                <div class="card-header">
                    
                    <div class="card-title">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 >Banner List</h5>
                            </div>
                            <div class="col-lg-2">
                                <a href="add_banner.php" class="btn btn-primary">Add Banner</a>
                            </div>

                        </div>
                        
                    </div>
                    
                
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        
                        <thead>
                            <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Banner Image</th>                            
                            <th scope="col">Status</th>                            
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($banners_query as $key=> $banner){?>
                            <tr>
                            <th scope="row"><?=++$key?></th>
                            <td><?=$banner['sub_title']?></td>
                            <td><?=$banner['title']?></td>
                            <td><?=$banner['descp']?></td>
                            <td><img width="30" src="../../uploads/banner_image/<?=$banner['banner_image']?>" alt=""></td>
                            <td><a href="banner_status.php?id=<?=$banner['id']?>" class="btn <?= $banner['status']==1?'btn-success':'btn-secondary' ?>"><?= $banner['status']==1?'Active':'Inactive' ?></a></td>

                            <td><a href="edit_banner.php?id=<?=$banner['id']?>" name="edite_banner" class="btn btn-danger">Edit</a>
                            <a href="delete_banner.php?id=<?=$banner['id']?>" name="delete_banner" class="btn btn-danger">Delete</a></td>
                            
                          <?php }?>  
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>