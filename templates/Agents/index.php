<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent[]|\Cake\Collection\CollectionInterface $agents
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>

<div class="container-fluid">
    <?= $this->Html->link(__('New Agent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agents') ?></h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('adress') ?></th>
                    <th><?= $this->Paginator->sort('coupon_code') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agents as $agent): ?>
                <tr>
                    <td><?= $this->Number->format($agent->id) ?></td>
                    <td><?= h($agent->name) ?></td>
                    <td><?= h($agent->phone_number) ?></td>
                    <td><?= h($agent->email) ?></td>
                    <td><?= h($agent->adress) ?></td>
                    <td><?= h($agent->coupon_code) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]) ?>
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
