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
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <p></p>
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th></th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="thumbnail-img">
                                <a href="#">
                                    <img class="img-fluid" src="images/img-pro-01.jpg" alt="" />
                                </a>
                            </td>
                            <td class="name-pr">
                                <a href="#">
                                    Manuka Honey 40+
                                </a>
                            </td>
                            <td class="price-pr">
                                <p>$29.95</p>
                            </td>
                            <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                            <td class="total-pr">
                                <p>$ 29.95</p>
                            </td>
                            <td class="remove-pr">
                                <a href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold"> $ 130 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold"> $ 40 </div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Coupon Discount</h4>
                        <div class="ml-auto font-weight-bold"> $ 10 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Tax</h4>
                        <div class="ml-auto font-weight-bold"> $ 2 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Shipping Cost</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"> $ 388 </div>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
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
