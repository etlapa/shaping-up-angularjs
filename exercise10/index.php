<html ng-app="wallet">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body>
        <div ng-controller="ListController as list">
        <div ng-if="list.isEmpty(list.accounts)">
            Loading data (3 seg aprox)...
            <img src="../img/loading.gif" />
        </div>
            <ul class="list-group">
                <li class="list-group-item" ng-repeat="account in list.accounts">
                    {{account.name}}
                    <em class="pull-right">
                        $ {{account.balance}}
                    </em>                    
                </li>


            </ul>
        </div>

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise10.js" ></script>
    </body>
</html>