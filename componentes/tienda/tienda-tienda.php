<?php
    
    function PortadaTienda(){

        require_once 'componentes/ilustraciones/tienda.php';
        $tienda= Tienda('assets/img/logo-runalotus.png');

        echo '
            
            <div class="portada-tienda">

            <div class="icono-portada-tienda">'.$tienda.'</div>

            <div class="boton-exportadores d-flex justify-content-center">

                <div class="btn btn-danger btn-exportadores">Somos exportadores de nuestra cultura</div>

            </div>
           
            
            </div>

        ';


        echo '
        
            <style>

                .portada-tienda{
                    /*border: 1px solid black;*/
                    display:block
                }

                .icono-portada-tienda{

                    width:100%;
                }

                .btn-exportadores{
                    width:300px;
                    font-size:30px;
                    margin-top:10%;
                    box-shadow: 4px 4px 5px black;

                }

                @media(min-width:1000px){

                    .portada-tienda{
                      /*  border: 1px solid black;*/
                        display:flex;
                        justify-content: space-around;
                    }
    

                    .icono-portada-tienda{

                        width:50%;
                    }


                    .btn-exportadores{
                        width:500px;
                        height:180px;
                        font-size:45px;
                        margin-top:20%;
                    
                        box-shadow: 6px 6px 7px black;
    
                    }
    


                }
            </style>
        
        ';
    }

?>