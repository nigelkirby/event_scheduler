<div class="jumbotron">
    <h1>Schedule of Events</h1>
    <p>
        AGC's 97th Annual Convention<br/>
        March 9-11, 2016<br/>
        San Antonio, TX
    </p>
</div>

<div class="events index">
    <div></div>
    <table class="table">
        <thead>
        <tr>
            <th><?= __('Time') ?></th>
            <th><?= __('Event Name') ?></th>
            <th><?= __('Room') ?></th>
            <th><?= __('Contact') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($events as $day => $events_grouped): ?>
            <tr class="active">
                <td colspan="5"><?= $day ?></td>
            </tr>
            <?php foreach ($events_grouped as $event): ?>

                <tr>
                    <td><?= h($event->time_span) ?></td>
                    <td><?= $this->Html->link($event->title, [
                            'action' => 'view', $event->id
                        ]) ?></td>
                    <td><?= isset($event->room->name) ? h($event->room->name) : '' ?></td>
                    <td><?= isset($event->contact->full_name_email) ? $event->contact->full_name_email : '' ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
