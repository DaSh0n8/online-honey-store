<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderline[]|\Cake\Collection\CollectionInterface $orderlines
 */
?>
<div class="orderlines index content">
    <?= $this->Html->link(__('New Orderline'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orderlines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderlines as $orderline): ?>
                <tr>
                    <td><?= $this->Number->format($orderline->id) ?></td>
                    <td><?= $orderline->has('order') ? $this->Html->link($orderline->order->id, ['controller' => 'Orders', 'action' => 'view', $orderline->order->id]) : '' ?></td>
                    <td><?= $orderline->has('product') ? $this->Html->link($orderline->product->name, ['controller' => 'Products', 'action' => 'view', $orderline->product->id]) : '' ?></td>
                    <td><?= $this->Number->format($orderline->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderline->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderline->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderline->id)]) ?>
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
