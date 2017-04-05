<html ng-app="store">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body>

        <div ng-controller="ControllerTab as list">

            <section ng-repeat="account in list.accounts" ng-controller="ControllerPanel as panel">

                {{account.name}}

                <ul class="nav nav-pills">
                    <li ng-class="{active:panel.isActive(1)}"><a href ng-click="panel.selectTab(1)">Description</a></li>
                    <li ng-class="{active:panel.isActive(2)}"><a href ng-click="panel.selectTab(2)">Description 2</a></li>
                </ul>

                <p ng-show="panel.isActive(1)">
                    Im the good one
                </p>

                <p ng-show="panel.isActive(2)">
                    I'm the good one either
                </p>

            </section>

        </div>

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise05.js" ></script>
    </body>
</html>