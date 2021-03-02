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
        <div  class="d-flex justify-content-end" style="">

            <div  style="position:fixed; margin-top:55px;" class="btn-danger d-flex justify-content-center">

                <span style="margin:5px; font-size:19px;"><i class="fas fa-language"></i></span>
                <p  style="margin:5px; font-size:18px;">/</p>
                <span style="margin:5px; font-size:18px;"><i class="fas fa-dollar-sign"></i></span>
                
            </div>
       
        </div>


        
        
        ';


    }
?>
