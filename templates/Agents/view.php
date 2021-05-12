<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>

<div class="container-fluid">
            <h3><?= h($agent->name) ?></h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <table  class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($agent->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($agent->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($agent->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress') ?></th>
                    <td><?= h($agent->adress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coupon Code') ?></th>
                    <td><?= h($agent->coupon_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agent->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>

