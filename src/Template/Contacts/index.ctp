<div class="contacts">
    <br/>
    <?= $this->Html->link(__('New Contact'),
        ['action' => 'add'],
        ['class' => 'btn btn-md btn-primary']) ?>
    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Phone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= h($contact->last_name) ?></td>
            <td><?= h($contact->first_name) ?></td>
            <td><?= h($contact->email) ?></td>
            <td><?= h($contact->phone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id],['class' => 'btn btn-sm btn-primary']) ?>
                <?= $this->Form->postLink(__('Delete'),
                    [
                        'action' => 'delete', $contact->id
                    ], [
                        'confirm' => __('Are you sure you want to delete # {0}?', $contact->id),
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
