<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<?php $this->Html->css('my',['block'=>true]);?>
<head>
    <title>Paul's Honey</title>
</head>

<body>
<div id="header">
<h1>Paul's Honey</h1>
<div class='btn-group'>
        <div class = 'container'>
            <?= $this->Html->link(__('Add Products'), ['action' => '../Products/add'], ['class' => 'button float-right']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => '../Products/index'], ['class' => 'button float-right']) ?>
            <?= $this->Html->link(__('Add Customer'), ['action' => '../Customers/add'], ['class' => 'button float-right']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => '../Customers/index'], ['class' => 'button float-right']) ?>
        </div>
</div>
    </div>

</body>
