<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
$this->Html->css('my', ['block' => true]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Paul's Honey</title>
</head>

<body>
<div id="header">
<h1>Paul's Honey</h1>
<div class='btn-group'>
        <div class="container1">
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('List Customers'), ['action' => '../Customers/index'], ['class' => 'button float-right']) ?>
            </div>
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('Add Customer'), ['action' => '../Customers/add'], ['class' => 'button float-right']) ?>
            </div>
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('List Products'), ['action' => '../Products/index'], ['class' => 'button float-right']) ?>
            </div>
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('Add Products'), ['action' => '../Products/add'], ['class' => 'button float-right']) ?>
            </div>
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('List Orders'), ['action' => '../Orders/index'], ['class' => 'button float-right']) ?>
            </div>
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('List Users'), ['action' => '../Users/index'], ['class' => 'button float-right']) ?>
            </div>
            <div class = 'btn-individual'>
                <?= $this->Html->link(__('Add User'), ['action' => '../Users/add'], ['class' => 'button float-right']) ?>
            </div>
        </div>
</div>
    </div>

</body>
</html>
