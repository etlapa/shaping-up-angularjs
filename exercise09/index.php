<hmtl ng-app="customDirectives">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    </head>
    <body>
        <div >

            <h3 ng-include="'reusable.php'">
            </h3>

            <h3>
                <reusable-element></reusable-element>
            </h3>
            
            <pre>
                This is used as shown below (controller is declared in the directive):<br />
                &lt;reusable-element&gt;&lt;/reusable-element&gt;
            </pre>
            
            <p>
                <a href="../">Regresar</a>
            </p>

            <script type="text/javascript" src="../js/angular.min.js" ></script>
            <script type="text/javascript" src="exercise09.js" ></script>
        </div>
    </body>
</html>