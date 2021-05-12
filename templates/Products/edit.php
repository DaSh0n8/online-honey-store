<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Edit Product') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('price');
                    echo $this->Form->control('sku');
                    echo $this->Form->control('description');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('category');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('image_file',['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
