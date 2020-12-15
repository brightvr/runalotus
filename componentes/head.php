<?php

    function Head($idioma,$titulo,$ruta_estilos){

        echo '

            <!DOCTYPE html>
            <html lang="'.$idioma.'">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$titulo.'</title>     
        
        ';


        for($i=0;$i<count($ruta_estilos);$i++){

            echo '

            <link rel="stylesheet" href="'.$ruta_estilos[$i].'">
            
            ';
        }


        echo '

        </head>
        <body>
        
        
        ';


    }
?>
