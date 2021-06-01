<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderline $orderline
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderline->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderline->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orderlines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderlines form content">
            <?= $this->Form->create($orderline) ?>
            <fieldset>
                <legend><?= __('Edit Orderline') ?></legend>
                <?php
                    echo $this->Form->control('order_id', ['options' => $orders]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
