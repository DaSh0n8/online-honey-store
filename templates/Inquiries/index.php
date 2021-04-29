<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inquiry[]|\Cake\Collection\CollectionInterface $inquiries
 */
?>
<div class="inquiries index content">
    <?= $this->Html->link(__('New Inquiry'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inquiries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('phonenumber') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquiries as $inquiry): ?>
                <tr>
                    <td><?= $this->Number->format($inquiry->id) ?></td>
                    <td><?= h($inquiry->firstname) ?></td>
                    <td><?= h($inquiry->lastname) ?></td>
                    <td><?= h($inquiry->phonenumber) ?></td>
                    <td><?= h($inquiry->email) ?></td>
                    <td><?= h($inquiry->message) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inquiry->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inquiry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inquiry->id)]) ?>
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
