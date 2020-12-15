<?php

    function PortadaIndex($titulo,$boton){

        require_once 'componentes/ilustraciones/chiva.php';
        CarroColombia();


        //html
        echo '
                    
            <div class="contenedor-titulo-principal">

            <div class="titulo-colombia">
            '.$titulo.'
            </div>
            <div class="btn boton-explorar">
           '.$boton.'
            </div>
            </div>
        
        ';


        //css
        echo '
        
            <style>

            .contenedor-titulo-principal{
                width: 100%;
                display: block;
            }
            .titulo-colombia{
                width: 100%;
                display: flex;
                justify-content: center;
                font-size: 80px;
                color: #A20004;
            }
            .boton-explorar{
            
                width: 90%;
                margin-left: 5%;
                background: #A20004;
                color: white;
                display: flex;
                justify-content: center;
                text-align: center;
                font-size: 40px;
                box-shadow: 5px 5px 5px black;
            }
            
            .boton-explorar:hover{
                color: white;
            }

            .explorar-container{

                width:100%;
                height:100vh;
                background:rgba(0, 0, 0, 0.604);
                position: absolute;
                z-index:9999999;
                
            }
            .contenedor-tienda{

                color:white;


            }
            

            @media(min-width:1000px){

 

                .contenedor-titulo-principal{
                    position: absolute;
                    margin-top: -380px;
                    width: 50%;
                }

                .titulo-colombia{
                    font-size: 100px;
                }
            
             
            
            }
            
            @media(min-width:1250px){
            
                .contenedor-titulo-principal{
                    margin-top: -460px;
                }
            }
            
            </style>
        
        ';

        
        //javascript

        echo '
        <script>
        
        $(".boton-explorar").on("click",function(){
            
            
            window.location.href="tienda.php";
    
        });


        </script>
        
        ';


    }

?>

