<html ng-app="store">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body>

        <div ng-controller="ControllerTab as list">

            <section ng-repeat="account in list.accounts" ng-init="tab = 1">

                {{account.name}}

                <ul class="nav nav-pills">
                    <!--                    <li class="active"><a href ng-click="tab=1">Description</a></li> -->
                    <li ng-class="{active:tab === 1}"><a href ng-click="tab = 1">Description</a></li>
                    <li ng-class="{active:tab === 2}"><a href ng-click="tab = 2">Description 2</a></li>
                </ul>

                <p ng-show="tab === 1">
                    Im the good one
                </p>

                <p ng-show="tab === 2">
                    I'm the good one either
                </p>

            </section>

        </div>

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise04.js" ></script>
    </body>
</html>