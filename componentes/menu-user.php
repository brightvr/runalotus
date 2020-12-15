<?php

//aqui se imprime todo el menu desplegable tanto de escritorio como de celular
    function MenuUsuarioSinRegistro($correo,$contraseña,$registrarse,$ingresar,$nombre,$pais,$celular,$idioma,$español,$ingles,$portugues,$save,$tiendaPage,$turismoPage,$inicioPage,$olvidar){


        //css
        echo '

        <style>

        .ingresar-flecha, .registrarse-flecha{

            margin:3px;
        }

.cont-menu-cel{
    font-size: 38px;
    color: #A97A00;
    display: flex;
    margin: 3px;
}

.nav-celular{

    width: 100%;
    height: 100vh;
    overflow-y: scroll;
    background: #A97A00;
    position: absolute;
    z-index: 9999;
}

.btn-cerrar-nav{

    width: 100%;
    display: flex;
    justify-content: flex-end;
    color: #A20004;
    font-size: 38px;
}

.contenedor-menu-nav-cel{

    width: 100%;
    display: block;
}
.vinculo-celular{

    width: 90%;
    background: white;
    color: #A97A00;
    display: flex;
    justify-content: center;
    font-size: 30px;
    margin-top: 30px;
    margin-left: 5%;

}

.vinculo-celular:hover{
    background: #A20004;
    color: white;
    box-shadow: 4px 4px 5px black;
}


.elegido{
    background: #A20004;
    color: white;
    box-shadow: 4px 4px 5px black;
}


.linea{
    width: 95%;
    margin-left: 2.5%;
    height: 4px;
    background: rgb(201, 199, 199);
}



.contenedor-form-ingresar, .contenedor-form-registrarse{

    background: white;
    padding: 15px;
    font-size: 22px;
    width: 90%;
    color: #A97A00;
    margin-left: 5%;
}
a:hover{
    color:white;
}

@media(min-width:1000px){


    .cont-menu-cel{
        display: none;
    }

    .contenedor-menu-escritorio{
        width: 100%;
        display: flex;
        justify-content: flex-end;
        z-index: 99999;
        position: absolute;
    }

    .menu-escritorio{

        width: 70vh;
        height: 100vh;
        background: #A97A00;
        position: absolute;
        z-index: 9999999;
        overflow-y: scroll;
    


    }

    .cerrar-nav-escritorio{

        width: 100%;
        display: flex;
        justify-content: flex-end;
        color: #A20004;
        font-size: 38px;
    
    }

    .cont-form-ingresar-desktop{

        width: 80%;
        color: white;
        padding: 10px;
   

    }
    .olvidaste-contraseña{

        width: 80%;
        margin-left: 10%;
        
    }
    .lost-pass{
        color: white;
        font-size: 20px;
    }

    .espaciado{
        width: 90%;
        height: 3px;
        background: #dbdbdb;
        margin-left: 5%;
    }

    .cont-form-registro-desktop{

        width: 90%;
        color: #A97A00;
        background: white;
        margin-left: 5%;
        padding: 10px;
    }

}

</style>


        ';
  



    //javascript
    echo '
    <script>
    
    $(window).on("load", function(){

       // console.log(navigator.language);
    
    
          //abrir menu pantalla celular
    
          $(".cont-menu-cel").on("click",function(){
            
            //menu
            $("body").prepend(`
            
            <div class="nav-celular">
    
                <div class="btn-cerrar-nav">
    
                    
                    <i class="fas fa-window-close"></i>
                    
    
                </div>
    
    
                <div class="contenedor-menu-nav-cel">
    
    
                
                </div><br>
                <br>
                <div class="linea"></div>
                <br>
    
                <div class="vinculo-celular btn-ingreso">
                   '.$ingresar.' 
                    <span class="ingresar-flecha"><i class="fas fa-sign-in-alt"></i></span>
                </div>
    
    
                <div class="contenedor-form-ingresar ">
                    
                <form class="formulario-ingreso-celular" action="" method="post">
    
                <label>'.$correo.' :</label>
                <br>
                <input type="email" name="correo-usuario" required>
    
                <br><br>
    
                <label>'.$contraseña.' :</label>
                <br>
                <input type="password" name="contraseña-usuario" required>
                <br><br>
                
                <button type="submit" class="btn fondo-1 btn-block"><h3>'.$ingresar.'</h3></button>
                
                </form>
                
                </div>




                
                <br>
                        <div class="olvidaste-contraseña">
                        
                            <a href="" class="lost-pass">'.$olvidar.'</a>
                        
                        </div>
                        <br>

    
    
    
    
    
                <div class="vinculo-celular btn-registro">
                    '.$registrarse.'  
                    <span class="registrarse-flecha"><i class="fas fa-user-plus"></i></span>     
                                
                </div>
    
    
                <div class="contenedor-form-registrarse ">
                    
                <form class="formulario-registro-celular" action="" method="post">
    
                <label>'.$nombre.' :</label>
                <br>
                <input type="text" name="nombre-usuario" required>
    
                <br><br>
    
                <label> '.$correo.' :</label>
                <br>
                <input type="email" name="correo-usuario" required>
    
                <br><br>
    
    
                <label>'.$pais.' :</label>
                <br>
                <input type="text" name="pais-usuario" required>
    
                <br><br>
    
                <label>'.$celular.' :</label>
                <br>
                <input type="number" name="celular-usuario" required>
    
                <br><br>
    
                <label> '.$contraseña.' :</label>
                <br>
                <input type="password" name="contraseña-usuario" required>
                <br><br>
                <input type="checkbox" required ><label>-Acepto <a href="">términos y condiciones</a></label><br><br>
                
                <button type="submit" class="btn fondo-1 btn-block"><h3>'.$registrarse.'</h3></button>
                
                </form>
                
                </div>
    
    
    
    
                <div class="vinculo-celular btn-idioma">'.$idioma.'</div>


                <div class="cambiar-idioma  contenedor-form-registrarse">

                <form action="" method="post">

                    <label>Seleccionar idioma</label><br>
                    <select name="idioma">
                        <option value="Español">'.$español.'</option>
                        <option value="Ingles">'.$ingles.'</option>
                        <option value="Portuges">'.$portugues.'</option>
                        
                    </select>

                    <input type="submit" class="btn fondo-1" value="'.$save.'">
                
                
                </form>
                

                
                </div>
    
    
    
                <br>
                <br>
                <br>
            
            </div>
    
            
            
            `);
            
            //opciones del menu celular
    
    
            let paginas=["'.$inicioPage.'","'.$tiendaPage.'","'.$turismoPage.'"];

            //vinculos a otras paginas para menu celular
            let href_page=["index.php","tienda.php","turismo.php"];
    
            
          

            console.log(window.location.pathname);
    
    
            for(let i=0;i<paginas.length;i++){
    
                $(".contenedor-menu-nav-cel").append(`
                    
                    <a href="${href_page[i]}"> <div class="vinculo-celular">
                        ${paginas[i]}
                    </div></a>
                `);
        
    
            }
    
    
    
    
            //cerrar menu celular
            $(".btn-cerrar-nav").on("click",function() {
    
                $(".nav-celular").remove();
            });
    
    
            // abrir/cerrar form ingresar
            $(".btn-ingreso").on("click",function(){
    
                $(".contenedor-form-ingresar").toggleClass("d-none");
            })
    
            // abrir/cerrar form ingresar
            $(".btn-registro").on("click",function(){
    
                $(".contenedor-form-registrarse").toggleClass("d-none");
            })
    
    
    
        });//final abrir menu
    
    
    
    
        //__________________________________________________________________________________________________-
    
        $(".menu-desktop").on("click",function(){
    
            $("body").prepend(`
            
                <div class="contenedor-menu-escritorio">
                    <div class="menu-escritorio">
    
                        <div class="cerrar-nav-escritorio">
                        
                         <i class="fas fa-window-close"></i>
    
                        </div>
                        <br>

                        <div class="vinculo-celular btn-ingreso">
                        '.$ingresar.'
                        <span class="ingresar-flecha"><i class="fas fa-sign-in-alt"></i></span>
                        </div>

                        <div class="cont-form-ingresar-desktop cont-form-registro-desktop">
                        
    
                            <form class="formulario-ingreso-celular" action="" method="post">
    
                            <label>'.$correo.' :</label>
                            <br>
                            <input type="email" name="correo-usuario" required>
                
                            <br><br>
                
                            <label>'.$contraseña.' :</label>
                            <br>
                            <input type="password" name="contraseña-usuario" required>
                            <br><br>
                            
                            <button type="submit" class="btn fondo-1 btn-block"><h3>'.$ingresar.'</h3></button>
                            
                            </form>
                        
                        
                        </div>
                        <br>
                        <div class="olvidaste-contraseña">
                        
                            <a href="" class="lost-pass">'.$olvidar.'</a>
                        
                        </div>
    
    
                        <br>
                        <div class="espaciado"></div>
                        <br>
    
    
    
                        <div class="vinculo-celular btn-registro">
                           '.$registrarse.'  
                            <span class="registrarse-flecha"><i class="fas fa-user-plus"></i></span>                 
                        </div>
        
    
                        <div class="cont-form-registro-desktop">
                        
                        
                                                                
                                <form class="formulario-registro-celular" action="" method="post">
    
                                <label>'.$nombre.' :</label>
                                <br>
                                <input type="text" name="nombre-usuario" required>
    
                                <br><br>
    
                                <label> '.$correo.' :</label>
                                <br>
                                <input type="email" name="correo-usuario" required>
    
                                <br><br>
    
    
                                <label>'.$pais.' :</label>
                                <br>
                                <input type="text" name="pais-usuario" required>
    
                                <br><br>
    
                                <label>'.$celular.' :</label>
                                <br>
                                <input type="number" name="celular-usuario" required>
    
                                <br><br>
    
                                <label>'.$contraseña.' :</label>
                                <br>
                                <input type="password" name="contraseña-usuario" required>
                                <br><br>
                                <input type="checkbox" required ><label>-Acepto <a href="">términos y condiciones</a></label><br><br>
                                
                                <button type="submit" class="btn fondo-1 btn-block"><h3>'.$registrarse.'</h3></button>
                                
                                </form>
                                        
                        
                        
                        </div>
                        <br>
                        <br>
                        <div class="vinculo-celular btn-idioma">'.$idioma.'</div>


                        <div class="cambiar-idioma  contenedor-form-registrarse">
        
                        <form action="" method="post">
        
                            <label>Seleccionar idioma</label><br>
                            <select name="idioma">
                                <option value="Español">'.$español.'</option>
                                <option value="Ingles">'.$ingles.'</option>
                                <option value="Portuges">'.$portugues.'</option>
                                
                            </select>
        
                            <input type="submit" class="btn fondo-1" value="'.$save.'">
                        
                        
                        </form>
                        
        
                        <br>
                        <br>
                        </div>
                        <br>
                        <br>
                        
       
                    </div>
                    <br>
                    <br>
    
                </div>
    
            
            `);
    
            //cerrar nav escritorio
    
            $(".cerrar-nav-escritorio").on("click", function(){
    
                $(".contenedor-menu-escritorio").remove();
            })
        })
    })
    </script>
    ';
}
?>