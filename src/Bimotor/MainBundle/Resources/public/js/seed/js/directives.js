'use strict';

/* Directives */

BimotorApp.directive('username', function () {
    return {
        restrict: 'A',
        link: function ($scope, elem, attr) {
        }
    }
});
BimotorApp.directive('usernumber', function () {
    return {
        restrict: 'A',
        link: function ($scope, elem, attr) {
            var key = 'username' + attr.usernumber;
            $scope[key] = attr.username;
        }
    }
});
BimotorApp.directive('showHtml', function ($compile) {
    return {
        scope: true,
        link: function (scope, element, attrs) {
            var el;

            attrs.$observe('template', function (tpl) {
                if (angular.isDefined(tpl)) {
                    // compile the provided template against the current scope
                    el = $compile(tpl)(scope);
                    // stupid way of emptying the element
                    element.html("");

                    // add the template content
                    element.append(el);
                }
            });
        }
    };
});