<html ng-app="wallet">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body>
        <div ng-controller="SummaryController as lstAccounts">
            <h1>{{lstAccounts.account.name}}</h1>
            <h2>{{lstAccounts.account.currency}}</h2>
            <p>{{lstAccounts.account.balance}}</p>
            <img src="../img/approved.png" ng-show="lstAccounts.account.isUpdated" />
        </div>

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise02.js" ></script>
    </body>
</html>