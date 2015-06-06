<div class="events">
    <br/>
    <?= $this->Html->link(__('New Event'),
        ['action' => 'add'],
        ['class' => 'btn btn-md btn-primary']) ?>
    <table class="table">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('start_time', 'Starting Time') ?></th>
            <th><?= $this->Paginator->sort('end_time', 'Ending Time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($events as $event): ?>
            <tr>
                <td><?= h($event->title) ?></td>
                <td><?= h($event->date->format('M j')) ?></td>
                <td><?= h($event->start_time->format('h:i a')) ?></td>
                <td><?= h($event->end_time->format('h:i a')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'),
                        [
                            'action' => 'delete',
                            $event->id],
                        [
                            'confirm' => __('Are you sure you want to delete "{0}"?', $event->title),
                            'class' => 'btn btn-sm btn-primary'
                        ]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
