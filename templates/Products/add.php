<?php
define(ROOT,'./');

require ROOT . '/templates/Customers/header.php';
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Add Product') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('price');
                    echo $this->Form->control('description');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('category');
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
