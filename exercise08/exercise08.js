(function(){
    var myData = {
        name:"something",
        descr: "some descr"
    };
    
    var app = angular.module('customDirectives',[]);
    
    app.controller('ControllerCustomDirective',function(){
        this.product = myData;
    });

    app.directive('reusableElement',function(){
        return {
            restrict:'E',
            templateUrl:'reusable.php'
        };
    });

    app.directive('reusableAttribute',function(){
        return {
            restrict:'A',
            templateUrl:'reusable.php'
        };
    });

})();