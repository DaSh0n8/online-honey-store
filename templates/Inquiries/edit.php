<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inquiry $inquiry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inquiry->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inquiry->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inquiries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inquiries form content">
            <?= $this->Form->create($inquiry) ?>
            <fieldset>
                <legend><?= __('Edit Inquiry') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('phonenumber');
                    echo $this->Form->control('email');
                    echo $this->Form->control('message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
