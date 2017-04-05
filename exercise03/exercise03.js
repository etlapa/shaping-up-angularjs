(function(){
    var myData = [
        {
            name:       "TDD Santander",
            balance:    "99.90"
        },
        {
            name:       "BofA Checks",
            balance:    "99.90"
        }
    ];
    var app = angular.module('wallet',[]);
    app.controller('ListController',function(){
        this.accounts = myData;
    });
})();