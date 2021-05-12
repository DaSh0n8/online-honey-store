<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' =>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/jquery.dataTables.min.js', ['block' => true]);
?>
<?php
if ($this->Identity->get('role') == ('admin')){
    ?>
<div class="container-fluid">
    <h3><?= h($product->name) ?></h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                    <tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($product->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($product->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('SKU') ?></th>
                            <td><?= $this->Number->format($product->sku) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Category') ?></th>
                            <td><?= h($product->category) ?></td>
                        </tr>

                        <tr>
                            <th><?= __('Price') ?></th>
                            <td><?= $this->Number->format($product->price) ?></td>
                        </tr>

                        <tr>
                        <th><?= __('Weight') ?></th>
                        <td><?= $this->Number->format($product->weight) ?></td>
                        </tr>
                        <tr>
                        <th><?= __('Quantity') ?></th>
                        <td><?= $this->Number->format($product->quantity) ?></td>
                        </tr>
                        <tr>
                        <th><?= __('Description')?></th>
                        <td><?= h($product->description) ?></td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="related">
                <h4><?= __('Related Order Lines') ?></h4>
                <?php if (!empty($product->order_lines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->order_lines as $orderLines) : ?>
                        <tr>
                            <td><?= h($orderLines->id) ?></td>
                            <td><?= h($orderLines->order_id) ?></td>
                            <td><?= h($orderLines->product_id) ?></td>
                            <td><?= h($orderLines->quantity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'OrderLines', 'action' => 'view', $orderLines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'OrderLines', 'action' => 'edit', $orderLines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderLines', 'action' => 'delete', $orderLines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLines->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div></div>
</div></div>

<?php
}
?>
