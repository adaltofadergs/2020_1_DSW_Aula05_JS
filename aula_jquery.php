<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>
    <body>
        
        <div id="minhaDiv">Minha div</div>
        
        <button id="esconder">Esconder</button> 
        <button id="mostrar">Mostrar</button>
        
        <script>
                $("#esconder").click( function(){
                    $("#minhaDiv").hide(2000);
                });
                
                $("#mostrar").click( function(){
                    $("#minhaDiv").show(4000);
                } );
                
        </script>
        
        
        
    </body>
</html>
