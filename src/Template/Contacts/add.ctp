<div class="contacts form">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Input->makeInput('first_name');
            echo $this->Input->makeInput('last_name');
            echo $this->Input->makeInput('email');
            echo $this->Input->makeInput('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),
        ['class' => 'btn btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
