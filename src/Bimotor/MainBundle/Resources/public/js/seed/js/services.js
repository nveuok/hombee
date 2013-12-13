'use strict';

/* Services */
BimotorApp.factory('loginService', function ($http) {
    return {
        login: function (currentUser, url) {
            return $http({
                method: 'POST',
                url: url,
                data: {
                    username: currentUser.username,
                    password: currentUser.password
                }
            }).then(function (result) {
                    return result.data;
                });
        },
        getUsers: function () {
            return $http.get(jsBaseParams.getUsersUrl).then(function (result) {
                return result.data;
            });
        }
    }
});

BimotorApp.factory('appService', function ($http) {
    return {
        checkLogin: function () {
            return $http.get(jsBaseParams.loginCheckUrl).then(function (response) {
                return response.data;
            });
        },
        getPage: function (url) {
            return $http({
                mathod: 'GET',
                url: url
            }).then(function (response) {
                    return response.data
                });
        }
    }
})