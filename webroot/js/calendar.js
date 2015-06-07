/**
 *
 * Created by nikirby on 6/7/15.
 */
(function () {
    var app = angular.module('calendar', ['modal-confirm','ui.bootstrap']);

    app.controller('CalendarController', ['$http', function ($http) {
        var cal = this;

        this.edit = function (id) {
            $http.get('edit/' + id + '.json').
                success(function (data, status, headers, config) {
                    var event = data.event;
                }).
                error(function (data, status, headers, config) {
                });
        };

        this.remove = function (id) {
            cal.postDelete(id);
        };

        this.postDelete = function (id) {
            $http.post('delete/' + id + '.json').
                success(function (data, status, headers, config) {
                    var event = data.event;
                }).
                error(function (data, status, headers, config) {
                    console.log(status);
                    console.log(data);
                });
        }
    }]);
})();
