<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$cakeDescription = "Paul's Honey Administration";

$this->Html->css('sb-admin-2.min', ['block' => true]);
$this->Html->css('sb-admin-2', ['block' => true]);
$this->Html->script('sb-admin-2.min.js', ['block'=>true]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css')?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <?= $this->Html->script('/vendor/jquery/jquery.min.js')?>
    <?= $this->Html->css('sb-admin-2.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $this->Url->build('/') ?>">
                <div class="sidebar-brand-text mx-3">Paul's Honey Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>

            <!-- Nav Item - Products Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller'=>'Products','action' => 'index']) ?>" data-toggle="collapse" data-target="#collapseProducts"
                   aria-expanded="true" aria-controls="collapseProducts">
                    <span>Products</span>
                </a>
                <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Products</h6>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Products','action' => 'index']) ?>">View All Products</a>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Products','action' => 'add']) ?>">Add New Product</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Customers Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller'=>'Customers','action' => 'index']) ?>" data-toggle="collapse" data-target="#collapseCustomers"
                   aria-expanded="true" aria-controls="collapseCustomers">
                    <span>Customers</span>
                </a>
                <div id="collapseCustomers" class="collapse" aria-labelledby="headingCustomers"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Customers</h6>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Customers','action' => 'index']) ?>">View All Customers</a>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Customers','action' => 'add']) ?>">Add New Customer</a>

                    </div>
                </div>
            </li>


            <!-- Nav Item - Orders Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller'=>'Orders','action' => 'index']) ?>" data-toggle="collapse" data-target="#collapseOrders"
                   aria-expanded="true" aria-controls="collapseOrders">
                    <span>Orders</span>
                </a>
                <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Orders</h6>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Orders','action' => 'index']) ?>">View All Completed Orders</a>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Orders','action' => 'add']) ?>">Add New Order</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Users Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller'=>'Users','action' => 'index']) ?>" data-toggle="collapse" data-target="#collapseUsers"
                   aria-expanded="true" aria-controls="collapseUsers">
                    <span>Users</span>
                </a>
                <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Users</h6>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Users','action' => 'index']) ?>">View All Users</a>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Users','action' => 'add']) ?>">Add New User</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Orders Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller'=>'OrderLines','action' => 'index']) ?>" data-toggle="collapse" data-target="#collapseOrderLines"
                   aria-expanded="true" aria-controls="collapseOrderLines">
                    <span>OrderLines</span>
                </a>
                <div id="collapseOrderLines" class="collapse" aria-labelledby="headingUsers"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Order Lines</h6>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'OrderLines','action' => 'index']) ?>">View All Shopping Carts</a>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'OrderLines','action' => 'add']) ?>">Add Item Shopping Cart</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Inquiry Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $this->Url->build(['controller'=>'Inquiries','action' => 'index']) ?>" data-toggle="collapse" data-target="#collapseInquiry"
                   aria-expanded="true" aria-controls="collapseInquiry">
                    <span>Inquiries</span>
                </a>
                <div id="collapseInquiry" class="collapse" aria-labelledby="headingUsers"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Inquiries</h6>
                        <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Inquiries','action' => 'index']) ?>">View All Inquiries</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <main class="main">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                    <!-- Nav Item - Alerts -->

                    <!-- Nav Item - Messages -->

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Paul</span>
                            <img class="img-profile rounded-circle"
                                 src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= $this->Html->link(__('Logout'), ['action' => '../Users/logout']) ?>
                            </a>
                        </div>

                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>


        </main>
    </div>
    <!-- Bootstrap core JavaScript-->

    <?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js')?>
    <!-- Core plugin JavaScript-->
    <?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js')?>
    <!-- Custom scripts for all pages-->
    <?= $this->Html->script('/js/sb-admin-2.min.js')?>
    <?= $this->fetch('script') ?>
</body>
</html>



