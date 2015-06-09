<div class="page-header">
    <h1>Schedule of Events</h1>

    <p>
        AGC's 97th Annual Convention<br/>
        March 9-11, 2016<br/>
        San Antonio, TX
    </p>
</div>

<div class="events index" ng-controller="CalCtrl as cal">
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
        <tbody ng-repeat="event in events" ng-init="events = cal.getEvents()">
        <tr>
            <td>{{event.time_span}}</td>
            <td>{{event.title}}</td>
            <td>{{event.room.name}}</td>
            <td>{{event.contact.full_name}}</td>
            <td>
                <a href ng-click="">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href ng-click="confirmClick()" confirm-click>
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
