<?php 

    function Buscador($textBuscar,$placeholder){

        echo '<style>
        

            .buscador{

                display:block;
                width:40%;
                height:120px;
                border-radius:7px 0 0 7px;
                background:#A97A00;
            }
            .input-buscar{

                width:90%;
                margin-left:5%;                
            }
            .btn-buscador{
                
                box-shadow:3px 3px 6px black;
                width:90%;
                margin-left:5%;

            }

            @media(min-width:1000px){

                .buscador{
                    
                    display:flex;
            
                }

                .input-buscar{

                    width:50%;
                    margin-left:5%;
                    height:50px;
                    font-size:25px;                
                }
                .btn-buscador{
                    font-size:25px;
                    box-shadow:3px 3px 6px black;
                    width:30%;
                    margin-left:5%;
                    height:50px;
    
                }
    

            }    
        
        
        </style>';

        echo '
        <div  class="buscador   pt-3 mb-5">
    
            <input class="mb-2 input-buscar" type="text" placeholder="'.$placeholder.'">
            <br>
            <div  class="btn btn-danger bt-block btn-buscador">'.$textBuscar.' </div>
            
        
        </div>';


    }



?>