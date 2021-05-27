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


