<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine $orderLine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order Line'), ['action' => 'edit', $orderLine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Line'), ['action' => 'delete', $orderLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Lines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Line'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderLines view content">
            <h3><?= h($orderLine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($orderLine->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($orderLine->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($orderLine->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 1') ?></th>
                    <td><?= h($orderLine->address_line_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 2') ?></th>
                    <td><?= h($orderLine->address_line_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($orderLine->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($orderLine->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Method') ?></th>
                    <td><?= h($orderLine->payment_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ship Method') ?></th>
                    <td><?= h($orderLine->ship_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderLine->has('order') ? $this->Html->link($orderLine->order->id, ['controller' => 'Orders', 'action' => 'view', $orderLine->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $orderLine->has('product') ? $this->Html->link($orderLine->product->name, ['controller' => 'Products', 'action' => 'view', $orderLine->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orderLine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Code') ?></th>
                    <td><?= $this->Number->format($orderLine->post_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($orderLine->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
