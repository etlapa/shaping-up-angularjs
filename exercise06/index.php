<html ng-app="todoList">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
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

        <form name="myForm" ng-controller="ControllerForm as form" ng-submit="form.addTask()">
            <blockquote>
                Preview:<hr />
                <b>Name: {{ form.task.name}}</b>
                <br />
                Description:
                {{ form.task.descr}}
                <br />
                <cite>Author: {{ form.task.author}}</cite>
            </blockquote>

            Send a task
            <br />
            Name: <input type="text" ng-model="form.task.name" />
            <br />
            Descr: <textarea ng-model="form.task.descr"></textarea>
            <br />
            Author: <input type="text" ng-model="form.task.author" />
            <input type="submit" value="Send" />
        </form>

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise06.js" ></script>
    </body>
</html>