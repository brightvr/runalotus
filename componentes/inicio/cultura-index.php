<?php

function CulturaIndex($tituloCultura,$textoCultura,$btnCultura){

    require_once 'componentes/ilustraciones/indio.php';
    $losIndios = Indio('assets/img/indios-unico1.png','assets/img/diamante.png');

    
    echo '
        
    <br>
    <div class="section-cultura">

        <div class="card-cultura">
        
        <h1>'.$tituloCultura.'</h1>
        <p>'.$textoCultura.'</p>
        <br>
        <div class="cont-btn">
        <div class="btn btn-danger ver-cultura"><h2>'.$btnCultura.'</h2></div>
        </div>

        </div>
        <br>
        <br>
        
        <div class="icono-tienda">'.$losIndios.'</div>


        </div>

    ';



    echo '
    
    <style>
    
        .section-cultura{

            width:100%;
            
        }

        .card-cultura{

            width:95%;
            margin-left:2.5%;
            background:#A97A00;
            padding:5px;
            color:white;
            border-radius:10px;
            border:1px solid black;
        }

        .card-cultura > p{

            font-size:30px;
            padding:20px;
            
        }

        .card-cultura > h1{

            display:flex;
            justify-content:center;
        }

        .icono-tienda{

            width:100%;
        }

        .ver-cultura{

            position:absolute;
            z-idex:999999;
            margin-top:-30px;
            width:70%;
            margin-left:10%;
            box-shadow: 5px 5px 5px black;

        }

        @media(min-width:900px){

                .section-cultura{

                    display:flex;

                }
                .card-cultura, .icono-tienda{
                
                    width:40%
                    padding:20px
                    margin-right:10px;
                   
                }
                .card-cultura{

                    padding:10px;
                    height:400px;
                    border:1px solid black;
                }
                .card-cultura > p{

                    font-size:38px;

                }

                .ver-cultura{

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
                    margin-top:-50px;
                
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
    $(".ver-cultura").on("click",function(){


        window.location.href="turismo.php";

    })

    </script>
    
    ';


}

?>