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
$this->Html->css('form', ['block' => true]);
$cakeDescription = 'CakePHP: the rapid development PHP framework';
require("header.php");
?>
<!DOCTYPE html>
<head lang="en">

</head>
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
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">


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
    <?= $this->fetch('script') ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>ABOUT US</h2>
<!--                <ul class="breadcrumb">-->
<!--                    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                    <li class="breadcrumb-item active">ABOUT US</li>-->
<!--                </ul>-->
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start About Page  -->
<div class="about-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="noo-sh-title-top">Welcome to <span>Paul's Healthy Honey</span></h2>
                <p>
                    Our honey is 100% Australian, organic and chemical residue free, is of the highest standard and quality harvested just for you.</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>100% Pure Australian Organic Honey</h3>
                    <p>At Paul’s Healthy Honey, we pride ourselves on sourcing the best chemical free and organic honey from hives across Australia. Please check out our exclusive range of honey infusions: Lemon, Cinnamon and Ginger; or our range of premium quality Australian Manuka Honey. </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>100% Chemical Residue Free
                    </h3>
                    <p>We DO NOT use any heat treatment, artificial additives or syrups in any of our products.
                        They are free from pesticides; are of premium quality; raw and chemical residue free.</p>
                    <p>
                        Learn more about our honey below!
                    </p>
                </div>
            </div>

        </div>
        <div class="row my-4">
            <div class="col-12">
                <h2 class="noo-sh-title">What Customers Think...
                </h2>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="hover-team">
                    <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                        <div class="team-content">
                            <h3 class="title">Williamson</h3> <span class="post">
Margaret Berwick, Melbourne</span> </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-youtube"></a>
                            </li>
                        </ul>
                        <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                    </div>
                    <div class="team-description">
                        <p>"I'm a cancer survivor and I take Paul's 260+ everyday and my immune system has improved dramatically and it also tastes great</p>
                    </div>
                    <hr class="my-0"> </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="hover-team">
                    <div class="our-team"> <img src="images/img-2.jpg" alt="" />
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3> <span class="post">Jason
Hong Kong</span> </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-youtube"></a>
                            </li>
                        </ul>
                        <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                    </div>
                    <div class="team-description">
                        <p>"I gave the 260+ to my 7 year old son who had been diagnosed with coronavirus and within two days his sore throat and temperature subsided and he was tested negative after 4 days."</p>                    </div>
                    <hr class="my-0"> </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="hover-team">
                    <div class="our-team"> <img src="images/img-3.jpg" alt="" />
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3> <span class="post">
Sur
Rosebud, Victoria</span> </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-youtube"></a>
                            </li>
                        </ul>
                        <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                    </div>
                    <div class="team-description">
<p>"Paul's honeys are my favourite and we love the cinnamon with our chai."
</p>                    </div>
                    <hr class="my-0"> </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="hover-team">
                    <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                        <div class="team-content">
                            <h3 class="title">Williamson</h3> <span class="post">Ming
Box Hill, Melbourne</span> </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-youtube"></a>
                            </li>
                        </ul>
                        <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                    </div>
                    <div class="team-description">
<p>
    "I love the 40+ honey and take it everyday and give it to my family and it tastes great and the price is excellent."</p>
                    </div>
                    <hr class="my-0"> </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Page -->

<!-- Inquiry Page -->
<div class="container1">
    <h1 align="center">Have a question?</h1>
    <p align="center">Please fill in this form to ask us.</p>
    <div class="inquiries form content">
        <?= $this->Form->create(null, array('url' => array('controller'=>'inquiries', 'action'=>'add'))) ?>
        <fieldset>
            <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('phone_number',['type'=>'number','min'=>0]);
            echo $this->Form->control('email',['type'=>'email']);
            echo $this->Form->control('message');
            ?>
        </fieldset>
        <div ><?= $this->Form->button(__('Submit')) ?></div>
        <?= $this->Form->end() ?>
    </div>

</div>


<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Business Time</h3>
                        <ul class="list-time">
                            <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Social Media</h3>
                        <p>Please connect with us through our social media.</p>
                        <ul>
                            <li><a href="https://www.facebook.com/PaulsHealthyHoney/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/paulshealthyhoney/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCaio3iruggQWHgHFbU5IkSA" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>St Kilda Esplanade Market <br>P.O.Box 382,<br> Caulfield East, <br> VIC 3145.</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">0412 804 035</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">paulshealthhoney@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
</footer>
<!-- End Footer  -->



<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
        <a href="https://html.design/">html design</a></p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/inewsticker.js"></script>
<script src="js/bootsnav.js."></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
