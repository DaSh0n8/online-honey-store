<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>
<?php
if ($this->Identity->get('role') == ('admin')){
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">

            <?= $this->Form->create($product,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Product') ?></legend>
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
    <?php
}
?>
