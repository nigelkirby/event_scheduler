<?php $this->layout = 'bootstrap'; ?>
<div class="events index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= __('Time') ?></th>
            <th><?= __('Event Name') ?></th>
            <th><?= __('Contact') ?></th>
            <th><?= __('Room') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($events as $day => $events_grouped):?>
        <tr>
            <td colspan="4"><?= $day ?></td>
        </tr>
        <?php foreach ($events_grouped as $event):?>

            <tr>
                <td><?= h($event->time_span) ?></td>
                <td><?= h($event->title) ?></td>
                <td><?= h($event->contact->full_name) ?></td>
                <td><?= h($event->room->name) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
