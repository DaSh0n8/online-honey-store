<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */

?>
<?php
if ($this->Identity->get('role') == ('admin')){
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Edit Customer') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('email_address');
                    echo $this->Form->control('street_address');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('post_code');
                    echo $this->Form->control('state');
                    echo $this->Form->control('marketing_emails');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
    <?php
}
?>
