<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
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
$cakeDescription = 'CakePHP: the rapid development PHP framework';
require("header.php");
?>
<div class="row my-4">
    <div class="col-12">
        <h2 class="noo-sh-title">What Customers Think...
        </h2>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="hover-team">
            <div class="our-team"> <img src="../webroot/images/img-1.jpg" alt="" />
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
            <div class="our-team"> <img src="../webroot/images/img-2.jpg" alt="" />
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
            <div class="our-team"> <img src="../webroot/images/img-3.jpg" alt="" />
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
            <div class="our-team"> <img src="../webroot/images/img-1.jpg" alt="" />
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
