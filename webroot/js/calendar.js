/**
 *
 * Created by nikirby on 6/7/15.
 *
 * TODO:register service with event as RESTful
 */
(function () {
    angular.module('calendar', ['modal-confirm', 'ui.bootstrap'])
        .factory('EventService', ['$http', function ($http) {
            var path = 'calendar.json';

            this.remove = function(id){
                $http.post('delete/' + id);
            };

            this.patch = function(id,data){
                console.log(id);
                $http.post('edit/' + id, data);
            };
            return {
                getEvents: function () {
                    return $http.get(path)
                        .then(function (result) {
                            return result.data.events;
                        });
                },
                remove: this.remove,
                patch: this.patch
            }
        }])

        .controller('CalCtrl', ['EventService','$scope', function (EventService, $scope) {
            this.removed = [];
            this.edit = [];

            EventService.getEvents().then(function (events) {
                $scope.events = events;
            });

            this.remove = function(id){
                EventService.remove(id);
                this.removed[id] = true;
            }
            this.edit = function(id){
                this.edit[id] = true;
                this.removed[id] = true;
            }
            this.save = function(event){
                EventService.patch(event.id,event);
                this.edit[event.id] = false;
                this.removed[event.id] = false;
            }
        }]);

})();
