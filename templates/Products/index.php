<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="container-fluid">
    <h3><?= __('Products') ?></h3>
    <div class="card shadow mb-4">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('Product ID') ?></th>
                    <th><?= h('Name') ?></th>
                    <th><?= h('Price') ?></th>
                    <th><?= h('SKU') ?></th>
                    <th><?= h('Weight (g)') ?></th>
                    <th><?= h('Category') ?></th>
                    <th><?= h('Quantity') ?></th>
                    <th><?= h('Image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->name) ?></td>
                    <td><?= $this->Number->format($product->price) ?></td>
                    <td><?= $this->Number->format($product->sku) ?></td>
                    <td><?= $this->Number->format($product->weight) ?></td>
                    <td><?= h($product->category) ?></td>
                    <td><?= $this->Number->format($product->quantity) ?></td>
                    <td><?= $this->Html->image($product->image)?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
