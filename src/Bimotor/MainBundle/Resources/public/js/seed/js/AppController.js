'use strict';

BimotorApp.controller('AppController', function ($scope, $compile, appService) {
        appService.checkLogin().then(function (response) {
            if (response.status == '401') {
                $scope.template = response.html;
            } else {

            }
        });
    }
);