(function(){
    var myData = [
        {
            name:       "TDD Santander",
            balance:    "99.90"
        }
    ];
    var app = angular.module('store',[]);
    app.controller('ControllerTab',function(){
        this.accounts = myData;
    });
})();