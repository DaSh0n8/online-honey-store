<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine[]|\Cake\Collection\CollectionInterface $items
*@var \App\Model\Entity\Product $products
 *  * @var \App\Model\Entity\Order $orders
 * @var \App\Model\Entity\Customer $customer
 */
use Cake\Cache\Cache;
use Cake\Http\Cookie\Cookie;
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
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <?= $this->Form->create(null, array('url' => array('controller'=>'customers', 'action'=>'checkoutadd'))) ?>
                            <fieldset>
                                <?php
                                echo $this->Form->control('first_name');
                                echo $this->Form->control('last_name');
                                echo $this->Form->control('phone_number',['type'=>'number','min'=>0]);
                                echo $this->Form->control('email_address',['type'=>'email']);
                                echo $this->Form->control('street_address');
                                echo $this->Form->control('suburb');
                                echo $this->Form->control('post_code',['type'=>'number']);
                                echo $this->Form->control('state');
                                echo $this->Form->control('marketing_emails');
                                ?>
                            </fieldset>
                            <?= $this->Form->button(__('Submit')) ?>
                            <?= $this->Form->end() ?>
                            <h3>Billing address</h3>
                        </div>

                            <?= $this->Form->create(null, array('url' => ['action'=>'add'])) ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <?php echo $this->Form->control('first_name', ['type'=>'text', 'class'=>'form-control']);?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <?php echo $this->Form->control('last_name', ['type'=>'text', 'class'=>'form-control']);?>
                                    <!--<label for="lastName">Last name *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>-->
                                </div>
                            </div>
                            <div class="mb-3">
                                <?php echo $this->Form->control('email', ['type'=>'email', 'class'=>'form-control']);?>
                                <!--<label for="email">Email Address *</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>-->
                            </div>
                            <div class="mb-3">
                                <?php echo $this->Form->control('address_line_1', ['type'=>'text', 'class'=>'form-control']);?>
                                <!--<label for="address">Address *</label>
                                <input type="text" class="form-control" id="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>-->
                            </div>
                            <div class="mb-3">
                                <?php echo $this->Form->control('address_line_2', ['default'=>null,'type'=>'text', 'class'=>'form-control']);?>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country *</label>
                                    <?php echo $this->Form->select('country', ['Value 1'=>'Australia'], ['class'=>'wide w-100']);?>

                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State/Territory *</label>
                                    <?php echo $this->Form->select('state', ['Value 1'=>'ACT', 'Value 2'=>'SA', 'Value 3'=>'VIC',
                                        'Value 4'=>'QLD', 'Value 5'=>'NSW', 'Value 6'=>'WA', 'Value 7'=>'NT', 'Value 8'=>'TAS'], ['class'=>'wide w-100']);?>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">

                                    <?php echo $this->Form->control('post_code',['type'=>'number','min'=>0200, 'max'=>'9944', 'class'=>'form-control', 'id'=>'zip']);?>
                                    <!--<input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback"> Zip code required. </div>-->
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>
                            <hr class="mb-4">
                                <label for="payment">Payment Method *</label>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <?php
                                    echo $this->Form->radio('payment_method', [
                                            ['value'=>'bankTransfer',
                                                'text'=>'Bank Transfer',
                                                'class'=>'custom-control-label',
                                                'style'=>'block'
                                            ],
                                            ['value'=>'paypal',
                                                'text'=>'Paypal',
                                                'class'=>'custom-control-label',
                                                'style'=>'block'
                                            ]]

                                    );
                                    $this->Html->link(__('Paypal'), ['action' => ''])

                                    ?>


                                    <!--<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>-->

                                </div>
                            </div>
                            <hr class="mb-1"> </form>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Shipping Method</h3>
                                </div>
                                <div class="mb-4">
                                    <?php
                                    echo $ship_method=$this->Form->radio('ship_method', [
                                            ['value'=>'shipMethod1',
                                                'text'=>'Standard Delivery: Free',
                                            'class'=>'custom-control-label',
                                                'style'=>[
                                                    'display:block'
                                                    ]
                                            ],
                                            ['value'=>'shipMethod2',
                                                'text'=>'Express Delivery: $10',
                                                'class'=>'custom-control-label',
                                                'style'=>[
                                                    'display:block'
                                                ]
                                            ]]

                                    );?>
                                    </div>

                                    <!--<div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">$10.00</span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 business days)</div>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <?php
                                $cart_ttl = 0;
                                $shipping_cost = 0;
                                $grand_ttl = 0;
                                $cartSession = $this->request->getSession();
                                if ($cartSession->check('Cart') == false):?>
                                    <div class="d-flex">
                                        <h5>Your cart is currently empty.</h5></div>
                                <?php elseif($cartSession->check('Cart') == true):?>
                                    <?php
                                    $cart = $this -> request -> getSession() -> read('Cart');
                                    ?>
                                    <?php foreach($cart as $item):?>
                                        <?php
                                        $cart_ttl = $cart_ttl + $item['product_price']*$item['quantity']
                                        ?>
                                    <?php endforeach; ?>
                                    <div class="rounded p-2 bg-light">

                                        <!--                                    <div class="media mb-2 border-bottom">
                                                                                <div class="media-body"> <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                                                                                    <div class="small text-muted">Price: $80.00 <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: $80.00</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media mb-2 border-bottom">
                                                                                <div class="media-body"> <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                                                                                    <div class="small text-muted">Price: $60.00 <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: $60.00</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media mb-2">
                                                                                <div class="media-body"> <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                                                                                    <div class="small text-muted">Price: $40.00 <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: $40.00</div>
                                                                                </div>
                                                                            </div>-->

                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Your Order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>

                                    <div class="ml-auto font-weight-bold">Total</div>

                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h5>Sub Total</h5>
                                    <div class="ml-auto font-weight-bold">$<?= $this->Number->format($cart_ttl) ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h5>Shipping Cost</h5>
                                    <div class="ml-auto font-weight-bold">$<?= $this->Number->format($shipping_cost) ?></div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5">
                                        <?php
                                        $grand_ttl = $shipping_cost+$cart_ttl;?>
                                        $<?= $this->Number->format($grand_ttl) ?> </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box">

                            <div>
                                <?php
                                echo $this->Form->button(__('Place Order'), ['type'=>'submit', 'class'=>'ml-auto btn hvr-hover', 'style'=>'font-size: 20px']);?></div>
                            <div class="col-12 d-flex shopping-box"><div class="ml-auto btn hvr-hover"> <?= $this->Html->link(__('Paypal'), ['action' => 'paypal']) ?> </div>
                            </div>


                           <!-- <a href="checkout.html" class="ml-auto btn hvr-hover">Place Order</a> </div>-->
                            <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
    </div>
    </div>
<!-- End Cart -->
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


