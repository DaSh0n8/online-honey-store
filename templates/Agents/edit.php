<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <?= $this->Form->create($agent) ?>
            <fieldset>
                <legend><?= __('Edit Agent') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('adress');
                    echo $this->Form->control('coupon_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
