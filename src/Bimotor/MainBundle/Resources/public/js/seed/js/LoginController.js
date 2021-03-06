'use strict';

BimotorApp.controller('LoginController', function ($scope, $attrs, loginService, appService) {
        $scope.error = {};
        $scope.currentUser = {
            'username': '',
            'password': '',
            'user': ''
        };
        $scope.getUsers = function () {
            var users = {};
            for (var i = 1; i <= $scope.userNr; i++) {
                users['user' + i] = {'visible': true, 'username': ''}
            }
            return users;
        }

        $scope.selectUser = function (index) {
            for (var i = 1; i <= $scope.userNr; i++) {
                if (i != index) {
                    $scope.users['user' + i] = {'visible': false}
                } else {
                    $scope.currentUser['user'] = 'user' + i;
                    $scope.currentUser['username'] = $scope['username' + i];
                }
            }
            $scope.noUser = true;
            $scope.userSelected = true;
            $scope.hideLoginButton = true;
        }
        $scope.showAllUsers = function () {
            for (var i = 1; i <= $scope.userNr; i++) {
                $scope.users['user' + i] = {'visible': true}
            }
            $scope.noUser = false;
            $scope.userSelected = false;
            $scope.hideLoginButton = false;
        }
        $scope.login = function () {
            $scope.currentUser.password = $scope.password;
            loginService.login($scope.currentUser, jsBaseParams.loginCheckUrl).then(function (data) {
                if (data.status == '401') {
                    $scope.error.password = true;
                    $scope.password = '';
                } else {
                    $scope.error.password = false;
                    $scope.loggedUser = {
                        'username': data.status
                    };
                    appService.getPage(jsBaseParams.clientUrl).then(function (response) {
                        console.log(response);
                        $scope.template = response.html;
                    });
                }
            });
        }

        $scope.userNr = $attrs.usernr;
        $scope.noUser = false;
        $scope.error.password = false;
        $scope.userSelected = false;
        $scope.hideLoginButton = false;
        $scope.users = $scope.getUsers();
    }
);