<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inquiry[]|\Cake\Collection\CollectionInterface $inquiries
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="container-fluid">
    <h3><?= __('Inquiries') ?></h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                    <thead><tr>
                    <tr>
                        <th><?= h('Id') ?></th>
                        <th><?= h('First Name') ?></th>
                        <th><?= h('Last Name') ?></th>
                        <th><?= h('Phone') ?></th>
                        <th><?= h('Email') ?></th>
                        <th><?= h('Message') ?></th>
                        <th><?= h('Date and Time') ?></th>
                        <th><?= h('Reply status') ?></th>
                        <th><?= h('Action') ?></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquiries as $inquiry): ?>
                    <?php if(($inquiry->reply_status)==1){
                    $background="#90EE90";
                }
                else{
                    $background="#FFCCCBB";
                }
                    ?>
                <tr bgcolor="<?php echo $background;?>">
                    <td><?= $this->Number->format($inquiry->id) ?></td>
                    <td><?= h($inquiry->first_name) ?></td>
                    <td><?= h($inquiry->last_name) ?></td>
                    <td><?= h($inquiry->phone_number) ?></td>
                    <td><?= h($inquiry->email) ?></td>
                    <td><?= h($inquiry->message) ?></td>
                    <td><?= h($inquiry->date) ?></td>
                    <td><?= $inquiry->reply_status? __('Replied') : __('Unreplied'); ?></td>
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
        </div> </div>
            <?= $this->Html->script('/js/demo/datatables-demo.js')?>

</div>
