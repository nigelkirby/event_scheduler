/**
 *
 * Created by nikirby on 6/7/15.
 */
(function () {
    angular.module('calendar', ['modal-confirm', 'ui.bootstrap'])
        .factory('EventService', ['$http', function ($http) {
            var path = 'calendar.json';

            this.remove = function(id){
                $http.post('delete/' + id);
            };
            return {
                getEvents: function () {
                    return $http.get(path)
                        .then(function (result) {
                            return result.data.events;
                        });
                },
                remove: this.remove
            }
        }])

        .controller('CalCtrl', ['EventService','$scope', function (EventService, $scope) {
            this.removed = [];

            EventService.getEvents().then(function (events) {
                $scope.events = events;
            });

            this.remove = function(id){
                EventService.remove(id);
                this.removed[id] = true;
            }
        }]);

})();
