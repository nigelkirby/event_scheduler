<div class="events form">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
        echo $this->Input->makeInput('title');
        echo $this->Input->makeInput('description');
        echo $this->Input->makeInput('date', [
            'default' => '03/01/2016',
            'minYear' => '2016',
            'maxYear' => '2016',
            'year' => [
                'class' => 'input-sm',
            ],
            'month' => [
                'class' => 'input-sm',
            ],
            'day' => [
                'class' => 'input-sm'
            ]
        ]);

        echo $this->Input->makeInput('start_time', [
            'default' => '07:00:00',
            'interval' => 15,
            'timeFormat' => 24,
            'hour' => [
                'class' => 'input-sm'
            ],
            'minute' => [
                'class' => 'input-sm'
            ]
        ]);
        echo $this->Input->makeInput('end_time', [
            'default' => '07:00:00',
            'interval' => 15,
            'timeFormat' => 24,
            'hour' => [
                'class' => 'input-sm'
            ],
            'minute' => [
                'class' => 'input-sm'
            ]
        ]);
        echo $this->Input->makeInput('contact_id', ['options' => $contacts, 'empty' => true]);
        echo $this->Input->makeInput('room_id', ['options' => $rooms, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),
        ['class' => 'btn btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
