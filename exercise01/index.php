<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body ng-app="store">

        <div>
            {{ "Hello " + " expression!!!"}}        
        </div>

        <br />

        <div ng-controller="storeController as alias">

            Name: {{ alias.person.name}}
            <br />
            Nickname: {{ alias.person.nickname}}

        </div>

        <br />

        <p>
            <a href="../">Regresar</a>
        </p>

        <script type="text/javascript" src="../js/angular.min.js" ></script>
        <script type="text/javascript" src="exercise01.js" ></script>
    </body>
</html>