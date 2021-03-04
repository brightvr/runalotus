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
        <style>
        
        .container-idioma{

            width:100%; 
            height:100%;
            background:white;
            position:fixed;
            z-index:9999999999999;
            font-size:24px;
        }

        @media(min-width:1000px){

            .container-idioma{

                width:40%;
                box-shadow:1px 1px 10px black;
            }
        }

        
        
        </style>


        </head>
        <body>
        <div  class="d-flex justify-content-end" style="">

            <div  style="position:fixed; margin-top:55px;box-shadow:-3px 3px 6px black" class="btn-danger d-flex justify-content-center open-assets">

                <span style="margin:5px; font-size:19px;"><i class="fas fa-language"></i></span>
                <p  style="margin:5px; font-size:18px;">/</p>
                <span style="margin:5px; font-size:18px;"><i class="fas fa-dollar-sign"></i></span>
                
            </div>

            <div  class="d-none container-idioma p-2">

            <br>
            
            <div class="d-flex justify-content-center"><div class="btn btn-danger btn-block open-assets"><h4>Cerrar</h4></div></div>
            <br>
            <div style="background:#A97A00;width:90%;margin-left:5%;" class="text-light d-flex justify-content-center btn-idioma">Idioma</div>


            <div style="background:#A97A00;width:90%;margin-left:5%;" class="text-light p-4">

                <form action="" method="post">

                    <label>Seleccionar idioma:</label><br>
                    <select name="idioma">
                        <option  value="Español">Español</option>
                        <option  value="Ingles">Ingles</option>
                        <option  value="Portugues">Portugues</option>
                        <option  value="">Aleman</option>
                        <option  value="">Ruso</option>
                        <option  value="">Chino</option>
                        
                    </select>

                    <input type="submit" class="btn fondo-1" value="Guardar">
                
                
                </form>

            </div>

            <hr>

            <div style="background:#A97A00;width:90%;margin-left:5%;" class="text-light d-flex justify-content-center btn-idioma">Divisa</div>
            <div style="background:#A97A00;width:90%;margin-left:5%;" class="text-light p-4">

            <form action="" method="post">

                <label>Seleccionar divisa:</label><br>
                <select name="idioma">
                    <option  value="COP">COP</option>
                    <option  value="USD">USD</option>
                    <option  value="EUR">EUR</option>

                    
                </select>

                <input type="submit" class="btn fondo-1" value="Guardar">
            
            
            </form>
        


        </div>




            
            </div>
       
        </div>


        
        
        ';

        echo '<script>
        
                let idioma=document.getElementsByClassName("open-assets");

                for(let i=0;i<idioma.length;i++){

                    idioma[i].addEventListener("click",function(){

                        document.querySelector(".container-idioma").classList.toggle("d-none");
                    });

                }




        </script>
        ';


    }
?>
