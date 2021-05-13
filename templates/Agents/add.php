<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
?>

    <div class="column-responsive column-80">
        <div class="agents form content">
            <?= $this->Form->create($agent) ?>
            <fieldset>
                <legend><?= __('Add Agent') ?></legend>
                <?php
                    echo $this->Form->control('name',['type'=>'text']);
                    echo $this->Form->control('phone_number',['type'=>'number',min(0)]);
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
