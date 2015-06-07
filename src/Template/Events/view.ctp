<div class="events view">
    <h2><?= h($event->title) ?></h2>
    <div class="row">
        <div class="col-md-4 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($event->title) ?></p>
            <h6 class="subheader"><?= __('Contact') ?></h6>
            <p><?= $event->has('contact') ? $event->contact->full_name_email : '' ?></p>
            <h6 class="subheader"><?= __('Room') ?></h6>
            <p><?= $event->has('room') ? $event->room->name : '' ?></p>
        </div>
        <div class="col-md-8 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($event->string_date) ?></p>
            <h6 class="subheader"><?= __('Time') ?></h6>
            <p><?= h($event->time_span) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($event->description)) ?>
        </div>
    </div>
</div>
