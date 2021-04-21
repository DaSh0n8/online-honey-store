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
<div style = "position:relative; left:80px; top:2px; ">
    <a href="https://www.google.com/maps/place/8+Station+St,+Caulfield+North+VIC+3161/@-37.8655924,144.9720865,17z/data=!4m12!1m6!3m5!1s0x6ad6686ff6d9d34f:0xf34a2fcff682f9f0!2sSt+Kilda+Esplanade+Market!8m2!3d-37.8655924!4d144.9742752!3m4!1s0x6ad66992f2094035:0xc4315dfb4bf63274!8m2!3d-37.8767363!4d145.036677
" class="photo"><img src="../webroot/images/map.jpg" class="cart-thumb" alt="" /></a>
    St Kilda Esplanade Market P.O.Box 382, Caulfield East, VIC 3145.
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
