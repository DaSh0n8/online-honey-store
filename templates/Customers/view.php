<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
require('header.php')
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($customer->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($customer->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Address') ?></th>
                    <td><?= h($customer->email_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address') ?></th>
                    <td><?= h($customer->street_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($customer->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($customer->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= $this->Number->format($customer->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Code') ?></th>
                    <td><?= $this->Number->format($customer->post_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marketing Emails') ?></th>
                    <td><?= $customer->marketing_emails ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($customer->orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Agent Status') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Coupon Applied') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->id) ?></td>
                            <td><?= h($orders->customer_id) ?></td>
                            <td><?= h($orders->agent_status) ?></td>
                            <td><?= h($orders->subtotal) ?></td>
                            <td><?= h($orders->date) ?></td>
                            <td><?= h($orders->coupon_applied) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
