<div class="events">
    <br/>
    <?= $this->Html->link(__('New Event'),
        ['action' => 'add'],
        ['class' => 'btn btn-md btn-primary']) ?>
    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('string_date') ?></th>
            <th><?= $this->Paginator->sort('time_span', 'Time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($events as $event): ?>
        <tr>
            <td><?= h($event->title) ?></td>
            <td><?= h($event->string_date) ?></td>
            <td><?= h($event->time_span) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
