<?php

//aqui simplemente se imprime el menu de navegacion para escritorio

    function Navbar($link1,$link2,$link4,$icono){

      //html
        echo '

        <nav>
              <div class="contenedor-logo">
                <img class="logo" src="assets/img/logo-runalotus.png" alt="">
              </div>


              <div class="cont-menu-cel"><i class="fas fa-bars"></i></div>


              <div class="contenedor-vinculos">


                <div class="color-warning  vinculo"><a href="index.php">'.$link1.'</a></div>
                <div class="color-warning  vinculo"><a href="tienda.php">'.$link2.'</a></div>
                <div class="color-warning  vinculo"><a href="turismo.php">'.$link4.'</a></div>
                <div class="color-warning  vinculo menu-desktop">'.$icono.'</div>

              </div>

        </nav>
        ';




        //css

        echo '
        
        
        <style>

        
        body{

          cursor: pointer;
        }

        .fondo-1{

          background: #A20004;
          color: white;

        }

        
        a{
          text-decoration: none;
          color: #A97A00;
        }

        a:hover{
          text-decoration: none;
          color: white;
        }
        nav{

          width: 100%;
          height: 50px;
          background: rgba(255, 255, 255, 0);
          position: absolute;
          display: flex;
          justify-content: space-between;
        }
      
      
      
        .logo{
            width: 80px;
        }
        
        
        .contenedor-logo{
          margin-top: -3px;
        }
        
        
        .contenedor-vinculos{
        
            display: none;
        }

        @media(min-width:1000px){


                  nav{
                    justify-content: flex-end;
                }
            
            
                .contenedor-vinculos{
                    display: flex;
                    justify-content: flex-end;
                    width: 60%;
                    
                }
            
                .vinculo{
                    padding: 30px;
                    background: rgba(255, 255, 255, 0);
                    color:#A97A00;
                    margin-left: 40px;
                    display: flex;
                    text-align: center;
                    align-items: center;
                    justify-content: center;
                    font-size: 32px;
                }


                .vinculo:hover{
                    background: #A97A00;
                    color: white;
                }
            
            
                .logo{
                    width: 150px;
                    margin-top: -14px;
                }

                
                .contenedor-logo{
            
                    width: 30%;
                    margin-right: 10%;
                    margin-top: 3px;
            
                }
              


        }
      </style>
      
        
        
        ';
    }




?>