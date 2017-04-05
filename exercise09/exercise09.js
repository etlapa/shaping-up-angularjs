(function(){
    var myData = {
        name:"something",
        descr: "some descr"
    };
    
    var app = angular.module('customDirectives',[]);
    
    app.directive('reusableElement',function(){
        return {
            restrict:'E',
            templateUrl:'reusable.php',
            controller: function(){
                this.product = myData;
            },
            controllerAs: 'customDirective'
        };
    });

})();