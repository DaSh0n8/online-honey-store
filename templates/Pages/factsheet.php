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
$this->Html->css('responsive', ['block' => true]);
$cakeDescription = 'CakePHP: the rapid development PHP framework';
require("header.php");
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
<body>
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
                    <h2>MANUKA FACT SHEET</h2>
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
                <div class="col-lg-11">
                    <img src="../webroot/images/factsheetpic.png"
                         class="logo" alt="" width="400"
                         height="300"></a>
                    <br>
                    <br>
                </div>

                <div class="col-lg-11">
                    <h2 class="noo-sh-title-top">What <span>makes our honey so special?</span></h2>
                    <p>One of the most amazing things about the antibacterial activity of Manuka honey is that although bacteria that cause serious infections can develop resistance to our modern antibiotics (which is how they become superbugs), they cannot develop resistance to the activity of Manuka honey (Blair et al. 2009).

                        The special properties of Manuka honey were first identified by Professor Peter Molan in the 1980s while he was studying L. scoparium honey from New Zealand, and we have since discovered many sources of Australian Manuka with exceptionally high levels of activity.

                        Manuka honey is one of the most famous honeys in the world because of its medicinal properties, including:

                        Antimicrobial activity – that is, the ability to kill superbugs (antibiotic‐resistant bacteria and other difficult to treat microbes) that cause serious infections
                        Wound healing and anti‐inflammatory activity.</p>
                    <p>A natural compound called methylglyoxal (MGO) is responsible for much of the unique activity of Manuka honey. The MGO comes from a component, called dihydroxyacetone (DHA), which occurs organically in the nectar of flowers of some Leptospermum plants.

                        Various species of the Manuka plant produce different levels of DHA that give rise to the varying antibacterial potencies of this special honey.

                        Scientists looking at Australian honeys have found a number of sources of Manuka with exceptionally high levels of activity. (Cokcetin et al. 2016; Windsor et al. 2012).</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->


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
                                <li><a href="https://www.youtube.com/channel/UCkAJRCv4n8txNXAWaUgFssA" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
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
