<?php
session_start();
if(!isset($_SESSION['welcome'])){
    header('location: login.php');
}
require_once 'db.php';


$id = $_SESSION['check_id'];

$select_user = "SELECT * FROM users WHERE id=$id";
$select_user_result = mysqli_query($db_connect, $select_user);
$after_assoc = mysqli_fetch_assoc($select_user_result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

   
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../images/<?=$after_assoc['upload_image']?>">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?=$_SESSION['check_name']?><br><span class="user-state-info"><?=$_SESSION['check_email']?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="active-page">
                        <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>      
                   
                    <li class="active-page">
                        <a href="profile.php" class="active"><i class="material-icons-two-tone">dashboard</i>Profile</a>
                    </li> 
                   
                   
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                               
                                <li class="nav-item hidden-on-mobile">
                                 <button class="btn btn-danger "> <a class="text-white text-decoration-none" href="../logout.php">Logout</a></button>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
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
                                        
                                        <form action="profile_photo_post.php?id=<?=$_SESSION['check_id']?>" method="POST" enctype="multipart/form-data">
                                                <div class="example-container">
                                                    <div class="example-content">
                                                        <label  class="form-label">Upload your image</label>
                                                        <input type="file" class="form-control" name="image_upload" >
                                                        <button type="submit" class="btn btn-primary mt-3 " name="img_upld_btn">Upload image</button>
                                                    </div>
                                                
                                                </div>
                                            </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../ssets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>
    <script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
</body>
</html>


<?php
die();
                                                    if(isset($_SESSION['p_name'])){
                                                        echo $_SESSION['p_name'];
                                                    }else{
                                                        echo $_SESSION['check_name'];
                                                    }?>