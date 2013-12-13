'use strict';

BimotorApp.controller('AppController', function ($scope, $compile, appService) {
        appService.checkLogin().then(function (response) {
            switch (response.status) {
                case '401':
                    $scope.template = response.html;
                    break;
                case '200':
                    appService.getPage(jsBaseParams.clientUrl).then(function (response) {
                        $scope.template = response.html;
                    });
                    break;
            }
        });
    }
);