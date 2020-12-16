<?php

    function SectionTienda($tituloTienda,$textoTienda,$btnTienda){

        require_once 'componentes/ilustraciones/tienda.php';
        $tienda= Tienda('assets/img/logo-runalotus.png','assets/img/diamante.png','assets/img/bolso.png','assets/img/artesania.png','assets/img/sombrero.png','assets/img/tejido.png','assets/img/jarron.png','assets/img/jarron1.png','assets/img/aretes.png');


        echo '
        
        <br>
        <div class="section-tienda">

            <div class="card-tienda">
            
            <h1>'.$tituloTienda.'</h1>
            <p>'.$textoTienda.'</p>
            <br>
            <div class="cont-btn">
            <div class="btn btn-danger ver-tienda"><h2>'.$btnTienda.'</h2></div>
            </div>

            </div>
            <br>
            <br>
            
            <div class="icono-tienda">'.$tienda.'</div>


            </div>

        ';



        echo '
        
        <style>
        
            .section-tienda{

                width:100%;
                
            }

            .card-tienda{

                width:95%;
                margin-left:2.5%;
                background:#A97A00;
                padding:5px;
                color:white;
                border-radius:10px;
                border:1px solid black;
            }

            .card-tienda > p{

                font-size:30px;
                padding:20px;
                
            }

            .card-tienda > h1{

                display:flex;
                justify-content:center;
            }

            .icono-tienda{

                width:100%;
            }

            .ver-tienda{

                position:absolute;
                z-idex:999999;
                margin-top:-30px;
                width:70%;
                margin-left:10%;
                box-shadow: 5px 5px 5px black;

            }

            @media(min-width:900px){

                    .section-tienda{

                        display:flex;

                    }
                    .card-tienda, .icono-tienda{
                    
                        width:40%
                        padding:20px
                        margin-right:10px;
                       
                    }
                    .card-tienda{

                        padding:10px;
                        height:400px;
                        border:1px solid black;
                    }
                    .card-tienda > p{

                        font-size:38px;

                    }

                    .ver-tienda{

                        position:absolute;
                        margin-left:15%;
                    }
                    .cont-btn{

                        position:relative;
                        width:100%;
                        margin-top:10px;
                       
                    }
                    .icono-tienda{

                        margin-left:20px;
                    
                    }


            }

            @media(min-width:1195px){


                .cont-btn{

                    margin-top:70px;
                }

            }
        
        </style>
        
        ';


        //javascript
        echo '
        <script>
        $(".ver-tienda").on("click",function(){


            window.location.href="tienda.php";

        })

        </script>
        
        ';

    }

?>

