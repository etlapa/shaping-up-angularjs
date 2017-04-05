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
    
    app.controller('ControllerPanel',function(){
        
        this.tab=1;
        
        this.isActive = function(tabNumber){
            return tabNumber===this.tab;
        };
        
        this.selectTab = function(tabNumber){
            this.tab = tabNumber;
        };

    });
})();