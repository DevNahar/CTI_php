<?php

require_once '../db.php';
require_once 'header.php';

?>


<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Dashboard</h1>

                    <div>
                        <h3>Name : <?= $_SESSION['check_name'] ?></h3>
                    </div>
                    <div>
                        <h5>Email : <?= $_SESSION['check_email'] ?></h5>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="card widget widget-list">
                    <div class="card-header">
                        <h5 class="card-title">Total Users<span class="badge badge-success badge-style-light">
                                <?php
                                $count_users = "SELECT count(*) as total FROM users ";
                                $count_users_q = mysqli_query($db_connect, $count_users);
                                $count_assoc = mysqli_fetch_assoc($count_users_q);
                                echo "Total users : " . $count_assoc['total'];

                                ?>
                            </span></h5>
                    </div>
                    <?php

                    $select_users = "SELECT * FROM users ";
                    $select_users_q = mysqli_query($db_connect, $select_users);
                    ?>
                    <div class="card-body">
                        <span class="text-muted m-b-xs d-block">showing 5 out of 14 new users.</span>
                        <?php
                        foreach ($select_users_q as $data) {
                        ?>

                            <ul class="widget-list-content list-unstyled">
                                <li class="widget-list-item widget-list-item-green">
                                    <span class="widget-list-item-avatar">
                                        <div class="avatar avatar-rounded">
                                            <img src="../images/<?= $data['upload_image'] ?>" alt="klj">
                                        </div>
                                    </span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            <?= $data['name'] ?>
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            <?= $data['email'] ?>
                                        </span>
                                    </span>
                                </li>

                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card widget widget-payment-request">
                    <div class="card-header">
                        <h5 class="card-title">Payment Request<span class="badge badge-warning badge-style-light">8 June</span></h5>
                    </div>
                    <div class="card-body">
                        <div class="widget-payment-request-container">
                            <div class="widget-payment-request-author">
                                <div class="avatar m-r-sm">
                                    <img src="../../assets/images/avatars/avatar.png" alt="">
                                </div>
                                <div class="widget-payment-request-author-info">
                                    <span class="widget-payment-request-author-name">Caio Yousuke</span>
                                    <span class="widget-payment-request-author-about">Customer Journey Expert</span>
                                </div>
                            </div>
                            <div class="widget-payment-request-product">
                                <div class="widget-payment-request-product-image m-r-sm">
                                    <img src="../../assets/images/other/facebook_logo.png" class="mt-auto" alt="">
                                </div>
                                <div class="widget-payment-request-product-info d-flex">
                                    <div class="widget-payment-request-product-info-content">
                                        <span class="widget-payment-request-product-name">Google</span>
                                        <span class="widget-payment-request-product-about">Youtube Advertisments</span>
                                    </div>
                                    <span class="widget-payment-request-product-price">$2,399.99</span>
                                </div>
                            </div>
                            <div class="widget-payment-request-info m-t-md">
                                <div class="widget-payment-request-info-item">
                                    <span class="widget-payment-request-info-title d-block">
                                        Description
                                    </span>
                                    <span class="text-muted d-block">Advertisement for envato items</span>
                                </div>
                                <div class="widget-payment-request-info-item">
                                    <span class="widget-payment-request-info-title d-block">
                                        Due Date
                                    </span>
                                    <span class="text-muted d-block">14 June, 2021</span>
                                </div>
                            </div>
                            <div class="widget-payment-request-actions m-t-lg d-flex">
                                <a href="#" class="btn btn-light flex-grow-1 m-r-xxs">Reject</a>
                                <a href="#" class="btn btn-primary flex-grow-1 m-l-xxs">Approve</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<?php
require_once 'footer.php';

?>