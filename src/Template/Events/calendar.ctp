<div class="jumbotron">
    <h1>Schedule of Events</h1>
    <p>
        AGC's 97th Annual Convention<br/>
        March 9-11, 2016<br/>
        San Antonio, TX
    </p>
</div>

<div class="events index" ng-controller="CalendarController as cal" ng-init="cal.buildCalendar()">
    <div></div>
    <table class="table">
        <thead>
        <tr>
            <th><?= __('Time') ?></th>
            <th><?= __('Event Name') ?></th>
            <th><?= __('Room') ?></th>
            <th><?= __('Contact') ?></th>
            <th></th>
        </tr>
        </thead>
        <ng-include src="'angular/test.html'"></ng-include>
    </table>
</div>
