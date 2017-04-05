<html ng-app="todoList">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="exercise07.css" />
    </head>
    <body>

        <ul class="list-group" ng-controller="ControllerList as list">
            <li class="list-group-item" ng-repeat="task in list.tasks">
                <blockquote>
                    <b>Name: {{ task.name }}</b>
                    <br />
                    Description:
                    {{ task.descr }}
                    <br />
                    <cite>Author: {{ task.author }}</cite>
                </blockquote>
            </li>
        </ul>

        <form name="myForm" ng-controller="ControllerForm as form" ng-submit="myForm.$valid && form.addTask()" novalidate>
            Send a task
            <br />
            Name: <input type="text" ng-model="form.task.name" required />
            <br />
            Descr: <textarea ng-model="form.task.descr" required></textarea>
            <br />
            Author: <input type="text" ng-model="form.task.author" required />
            <input type="submit" value="Send" />
            
            <p>
                <hr />
                is this form valid?
                <strong>{{ myForm.$valid }}</strong>
            </p>
            
        </form>

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise07.js" ></script>
    </body>
</html>