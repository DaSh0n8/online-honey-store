<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="container-fluid">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('Customer ID') ?></th>
                    <th><?= h('First Name') ?></th>
                    <th><?= h('Last Name') ?></th>
                    <th><?= h('Phone Number') ?></th>
                    <th><?= h('Email Address') ?></th>
                    <th><?= h('Street Address') ?></th>
                    <th><?= h('Suburb') ?></th>
                    <th><?= h('Post Code') ?></th>
                    <th><?= h('State') ?></th>
                    <th><?= h('Marketing Emails') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->phone_number) ?></td>
                    <td><?= h($customer->email_address) ?></td>
                    <td><?= h($customer->street_address) ?></td>
                    <td><?= h($customer->suburb) ?></td>
                    <td><?= h($customer->post_code) ?></td>
                    <td><?= h($customer->state) ?></td>
                    <td><?= h($customer->marketing_emails) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        </div>
    </div>
    <?= $this->Html->script('/js/demo/datatables-demo.js')?>
</div>
