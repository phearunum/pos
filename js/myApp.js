
var app = angular.module('myApp', []);

var category =function($scope, $http){
    $http.get("http://inyourheart.beta.com/Api/Api/getMenu")
        .then(function (response) {
            $scope.names = response.data.body.data.category;
        });
}

app.controller('category', function($scope, $http) {
    $http.get("http://inyourheart.beta.com/Api/Api/getMenu")
        .then(function (response) {
            $scope.names = response.data.body.data.category;
        });
});


app.controller('menu', function($scope, $http) {
    $http.get("http://inyourheart.beta.com/Api/Api/getMenu")
        .then(function (response) {
            $scope.data = response.data.body.data.menu;
            angular.forEach($scope.data, function(result, key) {
                var i;
                for (i = 0; i < key.length; i++) {
                    console.log( result.i.list);
                }

            });

        });
});