'use strict';

/* Services */
BimotorApp.factory('loginService', function ($http) {
    return {
        login: function (currentUser) {
            return $http({
                method: 'POST',
                url: jsBaseParams.loginCheckUrl,
                data: {
                    username: currentUser.username,
                    password: currentUser.password
                }
            }).then(function (result) {
                    console.log(result.data);
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
        }
    }
})