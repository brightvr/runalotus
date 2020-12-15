<?php

//esta funcion es el cierre de las paginas, recibe un array de rutas de scripts

    function Cierre($rutas_scripts){

        for($i=0;$i<count($rutas_scripts);$i++){

            echo '<script src="'.$rutas_scripts[$i].'"></script>';
        }

        $ComponenteCierre= '
        </body>
        </html>  
        ';

        echo $ComponenteCierre;

    }

?>

