<?php

    function Categorias($categorias,$titulo)
    {
        echo '
            <style>
               
            .categorias{

                background:#A97A00;
                width:50%;
                font-size:20px;
                border-radius:0 7px 7px 0;
               

    
            }

            .btn-categoria{

                box-shadow:3px 3px 4px black;
                border-radius:5px;

            }
            .contenedor-categorias{

                height:350px; 
                overflow-y:scroll;
            }
           

            @media(min-width:1000px){

                .categorias{

                    width:40%;
                    font-size:28px;
                  
                }

            }
            
            </style>
        
        ';



        //html inicio div categoria
        echo '
        
        <div  class="categorias p-3 pt-4 mb-5">
            
            <p class="btn-categoria btn-danger pb-2 d-flex justify-content-center p-2"> '.$titulo.'</p>

            <div class="contenedor-categorias d-none">
            
       ';


       for($i=0;$i<count($categorias);$i++){

        echo '
        <div style="width:96%;margin-left:2%; color:#A97A00; " class="btn btn-light btn-block btn-categoria mt-4 mb-5">
        <h5>'.$categorias[$i].'</h5></div>';

       }



       echo '</div> </div>';//fin div categoria





       echo '<script>
 
        document.querySelector(".btn-categoria").addEventListener("click", function(){
        
            
            $(".contenedor-categorias").toggleClass("d-none")
        
        });
        
        
       </script>';
     
    }

    
 

?>