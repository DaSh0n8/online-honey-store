<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine[]|\Cake\Collection\CollectionInterface $items

 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
$this->disableAutoLayout();


echo $this->Html->css('custom', ['block' => true]);
echo $this->Html->css('bootstrap.min', ['block' => true]);
echo $this->Html->css(' style', ['block' => true]);
echo $this->Html->css('responsive', ['block' => true]);
echo $this->Html->css('min', ['block' => true]);
echo $this->Html->script('bootsnav.js',['block'=>true]);
require("../templates/Pages/header.php");
?>

<!-- Start Main Top -->

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>My Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">My Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</nav>
</header>
<!-- Start Cart  -->

<?php $cart = $this -> request -> getSession() -> read('Cart');?>

<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <p></p>
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($cart==null):?>
                        <h3>Your cart is currently empty.</h3>
                        <?php else:?>
                        <?php $cart_ttl=0;?>
                        <?php foreach($cart as $item):?>


                        <?php
                           /* if($item['product_id'] == ){

                            }*/
                        $total_qty = $item['product_price']*$item['quantity'];
                        $cart_ttl+=$total_qty;

                            ?>
                            <tr>

                                <td class="name-pr">
                                    <?= h($item['product_name'])?>
                                </td>
                                <td class="price-pr">$
                                    <?= $this->Number->format($item['product_price']) ?>
                                </td>
                                <td class="quantity-box">
                                    <?= $this->Number->format($item['quantity']) ?>
                                    </td>
                                <td class="total-pr">
                                    $<?= $this->Number->format($total_qty) ?>
                                    <p></p>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                        <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">

            </div>
            <div class="col-lg-6 col-sm-6">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <?php if($cart==null):
                            $cart_ttl=0?>
                        <div class="ml-auto h5">  $ <?= $this->Number->format($cart_ttl) ?> </div>
                        <?php endif;?>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><div class="ml-auto btn hvr-hover"> <?= $this->Html->link(__('Checkout'), ['action' => 'checkout']) ?> </div>
        </div>

    </div>
</div>

<!-- End  Section-->


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
                            </div>
                            </footer>
                            <!-- End Footer  -->

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
                            <script src="js/jquery-ui.js"></script>
                            <script src="js/jquery.nicescroll.min.js"></script>
                            <script src="js/form-validator.min.js"></script>
                            <script src="js/contact-form-script.js"></script>
                            <script src="js/custom.js"></script>

                            <?= $this->fetch('script') ?>
