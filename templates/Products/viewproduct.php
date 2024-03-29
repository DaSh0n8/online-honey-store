 <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */

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
                <h2>Product details</h2>
<!--                <ul class="breadcrumb">-->
<!--                    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                    <li class="breadcrumb-item active">Shop</li>-->
<!--                </ul>-->

            </div>
        </div>
    </div>
</div>
    </nav>
</header>
<!-- Start Product Section  -->

<!-- Start Shop Detail  -->
<div class="message success" ><?= $this->Flash->render() ?></div>
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <?= $this->Html->image($product->image) ?>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?= h($product->name) ?></h2>
                    <h5>$<?= $this->Number->format($product->price) ?></h5>
                    <p class="available-stock"><span><b>Qty:</b><?= $this->Number->format($product->quantity) ?></span><p>
                    <h4>Description:</h4>
                    <p><?= h($product->description) ?></p>



                    <!--<ul>
                        <li>
                            <div class="form-group quantity-box">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" value="0" min="0" max="20" type="number">
                            </div>
                        </li>
                    </ul>

                    <div class="price-box-bar">
                        <div class="cart-and-bay-btn">
                            <a class="btn hvr-hover" data-fancybox-close="" href=<?/*= $this->Url->build(['controller'=>'Products','action' => 'addProduct', $product->id]) */?>">Add to cart</a>
                        </div>
                        </div>
                    </div>-->

                    <?php echo $this->Form->create($product, array('id' => 'add-form', 'url' => array('controller' => 'Products', 'action' => 'addproduct')));?>
                    <?php
                    echo $this->Form->hidden('product_id', array('value' => $product->id));
                    echo $this->Form->hidden('product_name', array('value' => $product->name));
                    echo $this->Form->hidden('product_price', array('value' => $product->price));
                    echo $this->Form->number('quantity', array('step' => '1', 'min' => '1', 'max' => '10', 'value' => '1', 'inputmode' => 'numeric'));
                    echo $this->Form->submit('Add to Cart');
                    ?>
                    <?php $this->Form->end() ?>

<!--<div>8

</div>-->

                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->
 <?= $this->Flash->render() ?>
 <?= $this->fetch('content') ?>
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
</div>
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
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>

<?= $this->fetch('script') ?>
