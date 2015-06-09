/**
 *
 * Created by nikirby on 6/7/15.
 */
(function () {
    angular.module('calendar', ['modal-confirm', 'ui.bootstrap'])
        .factory('EventService', ['$http', function ($http) {
            var path = 'calendar.json';

            return {
                getEvents: function () {
                    return $http.get(path)
                        .then(function (result) {
                            return result.data.events;
                        });
                }

            }
        }])

        .controller('CalCtrl', ['EventService','$scope','$http', function (EventService, $scope, $http) {
            EventService.getEvents().then(function (events) {
                $scope.events = events;
            });
        }]);

})();
