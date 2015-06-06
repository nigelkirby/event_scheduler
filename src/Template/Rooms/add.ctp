<div class="rooms form">
    <?= $this->Form->create($room) ?>
    <fieldset>
        <legend><?= __('Add Room') ?></legend>
        <?php
            echo $this->Input->makeInput('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),
        ['class' => 'btn btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
