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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;
$this->Html->css('custom', ['block' => true]);
$this->Html->css('bootstrap.min', ['block' => true]);
$this->Html->css(' style', ['block' => true]);
$this->Html->css('min', ['block' => true]);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Paul's Healthy Honey Iteration 1 Index</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <?= $this->Html->meta('icon') ?>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo.png">


    <!-- Bootstrap CSS -->
    <?= $this->Html->css('bootstrap.min') ?>

    <!-- Site CSS -->
    <?= $this->Html->css('style') ?>

    <!-- Responsive CSS -->
    <?= $this->Html->css('responsive') ?>

    <!-- Custom CSS -->
    <?= $this->Html->css('custom') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>$ AUD</option>
                    </select>
                </div>
                <div class="right-phone-box">
                    <p>Call Us :- <a href="#"> 0412 804 035</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                        <option>Register Here</option>
                        <option>Sign In</option>
                    </select>
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li size="30">
                                <i class="fab fa-opencart" style="font-size: 20px"></i> <i style="font-size: 20px">10% off your first purchase for new customers!</i>
                            </li>
                            <li size="30">
                                <i class="fab fa-opencart" style="font-size: 20px"></i> <i style="font-size: 20px">Get some healing honey as a special Mother's Day gift!</i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->
<?php echo $this->Identity->get('email')?>
<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= $this->Url->build('/') ?>"><img src="../webroot/images/logo.png"
                                                                                  class="logo" alt="" height="100"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class='nav-item'>
                        <?= $this->Html->link(__('Home'), ['action' => '../']) ?>
                    </li>
                    <li class='nav-item'>
                        <?= $this->Html->link(__('About Us'), ['action' => '../Pages/about']) ?>
                    </li>
                    <li class='nav-item'>
                        <?= $this->Html->link(__('Products'), ['action' => '../Products/index3']) ?>
                    </li>
                    <li class="'nav-item">
                        <?= $this->Html->link(__('Our Location'), ['action' => '../Pages/Location']) ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="side-menu">                    <li class='nav-item'>
                        <?= $this->Html->link(__('Shopping Cart'), ['action' => '../OrderLines/cart']) ?>
                    </li>
                    </li>
                </ul>
                <?php
                if ($this->Identity->isLoggedIn()){
                    ?>
                    <div class="attr-nav">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item dropdown no-arrow">
                                <a  href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Account</span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                    <div class="attr-nav">
                                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                            <li class='nav-item'>
                                                <?= $this->Html->link(__('Logout'), ['controller' => 'Users','action' => 'logout']) ?>
                                            </li>
                                        </ul>
                                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                            <li class='nav-item'>
                                                <?= $this->Html->link(__('Register'), ['controller' => 'Users','action' => 'add']) ?>
                                            </li>
                                        </ul>
                                    </div>
                                    </a>
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="attr-nav">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item dropdown no-arrow">
                                <a href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Account</span>
                                </a>
                                <!-- Dropdown-->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                    <div class="attr-nav">
                                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                            <li class='nav-item'>
                                                <?= $this->Html->link(__('Login'), ['controller' => 'Users','action' => 'login']) ?>
                                            </li>
                                        </ul>
                                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                            <li class='nav-item'>
                                                <?= $this->Html->link(__('Register'), ['controller' => 'Users','action' => 'add']) ?>
                                            </li>
                                        </ul>
                                    </div>
                                    </a>
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <?php
                }?>

            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt=""/></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt=""/></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt=""/></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- ALL JS FILES -->
<script src="../webroot/js/jquery-3.2.1.min.js"></script>
<script src="../webroot/js/popper.min.js"></script>
<script src="../webroot/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="../webroot/js/jquery.superslides.min.js"></script>
<script src="../webroot/js/bootstrap-select.js"></script>
<script src="../webroot/js/inewsticker.js"></script>
<script src="../webroot/js/bootsnav.js"></script>
<script src="../webroot/js/images-loded.min.js"></script>
<script src="../webroot/js/isotope.min.js"></script>
<script src="../webroot/js/owl.carousel.min.js"></script>
<script src="../webroot/js/baguetteBox.min.js"></script>
<script src="../webroot/js/form-validator.min.js"></script>
<script src="../webroot/js/contact-form-script.js"></script>
<script src="../webroot/js/custom.js"></script>
</body>
<?= $this->fetch('script') ?>
</html>

