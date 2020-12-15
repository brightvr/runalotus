<?php

function SectionTurismo($tittle,$p1,$p2,$p3,$conocer_mas){

    require_once 'componentes/ilustraciones/mapa-colombia.php';

    $mi_mapa=Mapa();

    //html
    echo '

        <br>
        <div class="section-turismo">


        
        <div class="card-turismo">

        <h1>'.$tittle.'</h1>

        <p>'.$p1.'</p><br>
        <p>'.$p2.'</p><br>
        <p>'.$p3.'</p><br>

        <div class="cont-btn">
        <div class="btn btn-danger ver-tienda"><h2>'.$conocer_mas.'</h2></div>
        </div>
        
        </div>

        <div class="icono-turismo">
        
        '.$mi_mapa.'
        
        </div>

       
        
        </div>





        <div class="section-turismo-desktop">
        
        <div class="icono-turismo-desktop">
        
        '.$mi_mapa.'
        
        </div>
        <div class="card-turismo">
        
        <h1>'.$tittle.'</h1>

        <p>'.$p1.'</p><br>
        <p>'.$p2.'</p><br>
        <p>'.$p3.'</p><br>

        <div class="cont-btn">
        <div class="btn btn-danger ver-tienda ver-turismo"><h2>'.$conocer_mas.'</h2></div>
        </div>

        
        </div>

        
        </div>
    
    ';


    //css
    echo '
    
            <style>

            .resaltado{

                color:#A20004;
            }

                .section-turismo{


                    width:100%;
                    borde:1px solid black;
                }

                .icono-turismo{

                    
                }

                .card-turismo{

                    width:95%;
                    margin-left:2.5%;
                    background:#A97A00;
                    padding:12px;
                    color:white;
                    border-radius:10px;
                    border:1px solid black;
                    margin-bottom:36px;
                }

                .card-turismo > h1{

                    display:flex;
                    justify-content:center;
                    width:100%
                    border: 1px solid black;

                }
            
                .card-turismo > p{

                    font-size:35px;
                }

                .section-turismo-desktop{

                    display:none;
                }




            
                @media(min-width:900px){

                    .section-turismo{

                        display:none;
                    }

                    .icono-turismo-desktop{

                        width:40%;
                    }
    

                    .section-turismo-desktop{

                        width:100%;
                        display:flex;
                    }
                    .card-turismo{

                        width:55%;
                        height:100%;
                        padding:20px;
                    }

                    .ver-turismo{

                        margin-top:-15px;

                    }

                }
            </style>

    ';
 
    echo '
    <script>
    
    $(".ver-turismo").on("click",function(){


        window.location.href="turismo.php";
    })
    
    </script>
    ';

}
     

?> 