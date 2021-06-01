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
            <?= $this->Html->link(__('Edit Orderline'), ['action' => 'edit', $orderline->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orderline'), ['action' => 'delete', $orderline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderline->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orderlines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orderline'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderlines view content">
            <h3><?= h($orderline->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderline->has('order') ? $this->Html->link($orderline->order->id, ['controller' => 'Orders', 'action' => 'view', $orderline->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $orderline->has('product') ? $this->Html->link($orderline->product->name, ['controller' => 'Products', 'action' => 'view', $orderline->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orderline->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($orderline->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
