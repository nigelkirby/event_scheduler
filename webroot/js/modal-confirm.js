/**
 * All thanks to hsubu for publishing this on plnkr
 *
 * Altered by simpgeek (nigel kirby)
 */
(function () {
    angular.module('modal-confirm', [
        'ui.bootstrap'
    ])

        /*
         Confirm an ng-click action with a modal dialog window (requires UI Bootstrap Modal service)
         Using this modal requires two things: apply the attribute to the dom element and prepend
         the confirmClick() action to the ng-click attribute.

         <a href="#" ng-click="confirmClick() && deleteItem(item)" confirm-click>Delete</a>

         */
        .directive('confirmClick', ['$q', 'dialogModal', function ($q, dialogModal) {
            return {
                link: function (scope, element, attrs) {
                    // setup a confirmation action on the scope
                    scope.confirmClick = function (directive,msg) {
                        // if the msg was set to true, then return it (this is a workaround to make our dialog work)
                        if (msg === true) {
                            return true;
                        }
                        // msg can be passed directly to confirmClick('are you sure?') in ng-click
                        // or through the confirm-click attribute on the <a confirm-click="Are you sure?"></a>
                        msg = msg || attrs.confirmClick || 'Are you sure?';
                        // open a dialog modal, and then continue ngClick actions if it's confirmed
                        dialogModal(msg).result.then(function () {
                            scope.$eval(directive);
                        });
                        // return false to stop the current ng-click flow and wait for our modal answer
                        return false;
                    };
                }
            }
        }])

        /*
         Open a modal confirmation dialog window with the UI Bootstrap Modal service.
         This is a basic modal that can display a message with okay or cancel buttons.
         It returns a promise that is resolved or rejected based on okay/cancel clicks.
         The following settings can be passed:

         message         the message to pass to the modal body
         title           (optional) title for modal window
         okButton        text for OK button. set false to not include button
         cancelButton    text for Cancel button. ste false to not include button

         */
        .service('dialogModal', ['$modal', function ($modal) {
            return function (message, title, okButton, cancelButton) {
                // setup default values for buttons
                // if a button value is set to false, then that button won't be included
                okButton = okButton === false ? false : (okButton || 'Confirm');
                cancelButton = cancelButton === false ? false : (cancelButton || 'Cancel');

                // setup the Controller to watch the click
                var ModalInstanceCtrl = function ($scope, $modalInstance, settings) {
                    // add settings to scope
                    angular.extend($scope, settings);
                    // ok button clicked
                    $scope.ok = function () {
                        $modalInstance.close(true);
                    };
                    // cancel button clicked
                    $scope.cancel = function () {
                        $modalInstance.dismiss('cancel');
                    };
                };

                // open modal and return the instance (which will resolve the promise on ok/cancel clicks)
                var modalInstance = $modal.open({
                    template: '<div class="dialog-modal"> \
                  <div class="modal-header" ng-show="modalTitle"> \
                      <h3 class="modal-title">{{modalTitle}}</h3> \
                  </div> \
                  <div class="modal-body">{{modalBody}}</div> \
                  <div class="modal-footer"> \
                      <button class="btn btn-primary" ng-click="ok()" ng-show="okButton">{{okButton}}</button> \
                      <button class="btn btn-warning" ng-click="cancel()" ng-show="cancelButton">{{cancelButton}}</button> \
                  </div> \
              </div>',
                    controller: ModalInstanceCtrl,
                    resolve: {
                        settings: function () {
                            return {
                                modalTitle: title,
                                modalBody: message,
                                okButton: okButton,
                                cancelButton: cancelButton
                            };
                        }
                    }
                });
                // return the modal instance
                return modalInstance;
            }
        }])
})();
