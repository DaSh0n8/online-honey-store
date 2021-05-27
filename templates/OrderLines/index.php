<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine[]|\Cake\Collection\CollectionInterface $orderLines
 */
?>
<div class="orderLines index content">
    <?= $this->Html->link(__('New Order Line'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Order Lines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('address_line_1') ?></th>
                    <th><?= $this->Paginator->sort('address_line_2') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('post_code') ?></th>
                    <th><?= $this->Paginator->sort('payment_method') ?></th>
                    <th><?= $this->Paginator->sort('ship_method') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderLines as $orderLine): ?>
                <tr>
                    <td><?= $this->Number->format($orderLine->id) ?></td>
                    <td><?= h($orderLine->first_name) ?></td>
                    <td><?= h($orderLine->last_name) ?></td>
                    <td><?= h($orderLine->email) ?></td>
                    <td><?= h($orderLine->address_line_1) ?></td>
                    <td><?= h($orderLine->address_line_2) ?></td>
                    <td><?= h($orderLine->country) ?></td>
                    <td><?= h($orderLine->state) ?></td>
                    <td><?= $this->Number->format($orderLine->post_code) ?></td>
                    <td><?= h($orderLine->payment_method) ?></td>
                    <td><?= h($orderLine->ship_method) ?></td>
                    <td><?= $orderLine->has('order') ? $this->Html->link($orderLine->order->id, ['controller' => 'Orders', 'action' => 'view', $orderLine->order->id]) : '' ?></td>
                    <td><?= $orderLine->has('product') ? $this->Html->link($orderLine->product->name, ['controller' => 'Products', 'action' => 'view', $orderLine->product->id]) : '' ?></td>
                    <td><?= $this->Number->format($orderLine->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderLine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderLine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
