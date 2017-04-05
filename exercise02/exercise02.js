(function(){
    var cuenta = {
        name:       "TTD Santander",
        currency:   "MX",
        balance:    "$ 99.90",
        isUpdated:  true
    };
    var app = angular.module('wallet',[]);
    app.controller('SummaryController',function(){
        this.account = cuenta;
    });
})();