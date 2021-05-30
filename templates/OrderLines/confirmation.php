<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine[]|\Cake\Collection\CollectionInterface $items
 * @var \App\Model\Entity\Order $order
 * @var \App\Model\Entity\Customer $customers
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Cookie\Cookie;
$this->disableAutoLayout();


echo $this->Html->css('custom', ['block' => true]);
echo $this->Html->css('bootstrap.min', ['block' => true]);
echo $this->Html->css(' style', ['block' => true]);
echo $this->Html->css('responsive', ['block' => true]);
echo $this->Html->css('min', ['block' => true]);
echo $this->Html->script('bootsnav.js',['block'=>true]);
require("../templates/Pages/header.php");
?>
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

<!-- Start Cart  -->

<?php
$cartSession = $this -> request -> getSession();
$cart = $cartSession-> read('Cart');
$customer_id = array_pop($cart);
$subtotal = 0;

foreach($cart as $item):
    $subtotal = $subtotal + $item['product_price'];
endforeach;

$this->Form->create(null, array('url' => array('controller'=>'orders', 'action'=>'ordersadd')))?>
<fieldset>
    <?php
    echo $this->Form->hidden('customer_id', ['value'=>$customer_id]);
    echo $this->Form->hidden('agent_status', ['value'=>0]);
    echo $this->Form->hidden('subtotal', ['value'=>$subtotal]);
    echo $this->Form->hidden('date',['value'=>0]);
    echo $this->Form->hidden('coupon_applied', ['value'=>0]);
    ?>
</fieldset>

<?= $this->Form->end();

$cartSession = $this -> request -> getSession();
$cart = $cartSession-> read('Cart');
$orders_id = array_pop($cart);

foreach($cart as $item):

    $this->Form->create(null, array('url' => array('controller'=>'orderlines', 'action'=>'orderlinesadd')))?>
    <fieldset>
        <?php
        echo $this->Form->hidden('order_id', ['value'=>$orders_id]);
        echo $this->Form->hidden('product_id', ['value'=>$item['product_id']]);
        echo $this->Form->hidden('quantity', ['value'=>$item['quantity']]);
        ?>
    </fieldset>
    <?= $this->Form->end();
endforeach;

$cartSession->destroy();
?>
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                    <h2>THANK YOU FOR YOUR ORDER</h2>
                    <p>
                        Your order number is <b> <?= $orders_id?></b>.<br>
                        We will send you a confirmation email once it has been shipped.<br>
                    Thank you for shopping with Paul's Honey!</p>

            </div>
        </div>
    </div>
</div>
<!-- End Cart -->
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
<!-- ALL JS FILES -->
<script src="../../webroot/js/jquery-3.2.1.min.js"></script>
<script src="../../webroot/js/popper.min.js"></script>
<script src="../../webroot/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="../../webroot/js/jquery.superslides.min.js"></script>
<script src="../../webroot/js/bootstrap-select.js"></script>
<script src="../../webroot/js/inewsticker.js"></script>
<script src="../../webroot/js/bootsnav.js"></script>
<script src="../../webroot/js/images-loded.min.js"></script>
<script src="../../webroot/js/isotope.min.js"></script>
<script src="../../webroot/js/owl.carousel.min.js"></script>
<script src="../../webroot/js/baguetteBox.min.js"></script>
<script src="../../webroot/js/form-validator.min.js"></script>
<script src="../../webroot/js/contact-form-script.js"></script>
<script src="../../webroot/js/custom.js"></script>
</body>
<?= $this->fetch('script') ?>
</html>


