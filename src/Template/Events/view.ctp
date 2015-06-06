<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="events view col-lg-10 col-md-9 columns">
    <h2><?= h($event->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($event->title) ?></p>
            <h6 class="subheader"><?= __('Contact') ?></h6>
            <p><?= $event->has('contact') ? $this->Html->link($event->contact->id, ['controller' => 'Contacts', 'action' => 'view', $event->contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Room') ?></h6>
            <p><?= $event->has('room') ? $this->Html->link($event->room->name, ['controller' => 'Rooms', 'action' => 'view', $event->room->id]) : '' ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($event->id) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($event->modified) ?></p>
        </div>
        <div class="col-lg-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($event->date) ?></p>
            <h6 class="subheader"><?= __('Start Time') ?></h6>
            <p><?= h($event->start_time) ?></p>
            <h6 class="subheader"><?= __('End Time') ?></h6>
            <p><?= h($event->end_time) ?></p>
            <h6 class="subheader"><?= __('Time Span') ?></h6>
            <p><?= h($event->time_span) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($event->created) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($event->description)) ?>
        </div>
    </div>
</div>
