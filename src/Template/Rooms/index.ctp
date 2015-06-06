<div class="rooms">
    <br/>
    <?= $this->Html->link(__('New Room'),
        ['action' => 'add'],
        ['class' => 'btn btn-md btn-primary']) ?>
    <table class="table">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rooms as $room): ?>
            <tr>
                <td><?= h($room->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $room->id],['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'),
                        [
                            'action' => 'delete', $room->id
                        ], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $room->id),
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
