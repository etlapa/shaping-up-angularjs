(function(){
    var tasksData = [];
    
    var app = angular.module('todoList',[]);
    
    app.controller('ControllerList',function(){
        this.tasks = tasksData;
    });
    
    app.controller('ControllerForm',function(){
        this.task = {};
        
        this.addTask = function(){
            console.log(this.task);
            tasksData.push(this.task);
            this.task = {};
        };
        
    });
})();