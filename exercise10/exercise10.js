(function () {
    var app = angular.module('wallet', []);
    app.controller('ListController', ['$http', function ($http) {
            var that = this;
            this.accounts = [];
            
            this.isEmpty = function(arreglo){
                return arreglo.length===0;
            };
            
            $http.get('ajax-data.php').then(function (response) {
                that.accounts = response.data;
            }).finally(function(){
                console.log("$http.get complete!");
            });
        }]);
})();