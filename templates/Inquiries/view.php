<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inquiry $inquiry
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>
    <div class="container-fluid">
            <h3>Inquiry ID : <?= h($inquiry->id) ?></h3>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($inquiry->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($inquiry->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($inquiry->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($inquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($inquiry->message) ?></td>
                </tr>

                        <tr>
                            <th><?= __('Reply status') ?></th>
                            <td><?= $inquiry->reply_status ? __('Replied') : __('Unreplied'); ?></td>
                        </tr>

            </table>
        </div>
    </div>
</div>
    </div>
