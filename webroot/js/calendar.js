/**
 *
 * Created by nikirby on 6/7/15.
 */
(function () {
    var app = angular.module('calendar', ['modal-confirm','ui.bootstrap']);

    app.controller('CalendarController', ['$http', function ($http) {
        var cal = this;

        this.edit = function (id)
        {
            $http.get('edit/' + id + '.json').
                success(function (data, status, headers, config) {
                    var event = data.event;
                }).
                error(function (data, status, headers, config) {
                });
        };

        this.remove = function (id)
        {
            cal.postDelete(id);
        };

        this.postDelete = function (id)
        {
            $http.post('delete/' + id + '.json').
                success(function (data, status, headers, config) {
                    var event = data.event;
                }).
                error(function (data, status, headers, config) {
                    console.log(status);
                    console.log(data);
                });
        };


        this.buildCalendar = function ()
        {

            cal.eventsByDay = cal.fetchCalData();

        };

        this.fetchCalData = function ()
        {
            var ret_val = null;

            $http.get('events/calendar.json').
                success(function(data,status,headers,config){
                    ret_val = data.events;
                }).
                error(function(){
                    //message to user that calendar didn't load
                });

            return ret_val;
        };

    }]);

})();
