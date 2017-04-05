<hmtl ng-app="customDirectives">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body>
        <div ng-controller="ControllerCustomDirective as customDirective">

            <h3 ng-include="'reusable.php'">
            </h3>

            <h3>
                <reusable-element></reusable-element>
            </h3>
            
            <h3 reusable-attribute></h3>
            
            <p>
                <a href="../">Regresar</a>
            </p>

            <script type="text/javascript" src="../js/angular.min.js" ></script>
            <script type="text/javascript" src="exercise08.js" ></script>
        </div>
    </body>
</html>