<?php



function CardsTienda($nombre,$precio,$stock,$imagen){

    require_once 'componentes/ilustraciones/card.php';

    //styles
    echo '<style>

    .card-runa{

        width:300px;
        height:500px;
        box-shadow: 6px 6px 8px black;
        margin-bottom:80px;
        margin-top:10px;
        border:1px solid #AFAEAE;
    }
    @media(min-width:1000px){

        .card-runa{
           
            margin:30px;
            width:330px;
            height:530px;

        }
        .contenedor-cards{

            padding:30px;

        }
        
    }


    </style>';
  
     echo Card($nombre,$precio,$stock,$imagen);
}


?>