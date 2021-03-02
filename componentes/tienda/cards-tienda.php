<?php



function CardsTienda($nombre,$precio,$stock,$imagen){

    require_once 'componentes/ilustraciones/card.php';

    //styles
    echo '<style>

    .card-runa{

        width:340px;
        height:560px;
        box-shadow: 6px 6px 8px black;
        margin-bottom:80px;
        margin-top:10px;
        border:1px solid #AFAEAE;
    }
    @media(min-width:1000px){

        .card-runa{
           
            margin:30px;
            width:390px;
            height:610px;

        }
        .contenedor-cards{

            padding:30px;

        }
        
    }


    </style>';
  
     echo Card($nombre,$precio,$stock,$imagen);
}


?>