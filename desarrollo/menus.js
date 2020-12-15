$(window).on("load", function(){

    console.log(navigator.language);


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
                Ingresar 
                <span class="ingresar-flecha"><i class="fas fa-sign-in-alt"></i></span>
            </div>


            <div class="contenedor-form-ingresar ">
                
            <form class="formulario-ingreso-celular" action="" method="post">

            <label>Correo electronico :</label>
            <br>
            <input type="email" name="correo-usuario" required>

            <br><br>

            <label>Contraseña :</label>
            <br>
            <input type="password" name="contraseña-usuario" required>
            <br><br>
            
            <button type="submit" class="btn fondo-1 btn-block"><h3>Ingresar</h3></button>
            
            </form>
            
            </div>





            <div class="vinculo-celular btn-registro">
                Registrarse   
                <span class="registrarse-flecha"><i class="fas fa-user-plus"></i></span>                 
            </div>





            <div class="contenedor-form-registrarse ">
                
            <form class="formulario-registro-celular" action="" method="post">

            <label>Nombre de usuario :</label>
            <br>
            <input type="text" name="nombre-usuario" required>

            <br><br>

            <label> Correo electronico :</label>
            <br>
            <input type="email" name="correo-usuario" required>

            <br><br>


            <label>Pais :</label>
            <br>
            <input type="text" name="pais-usuario" required>

            <br><br>

            <label>Celular :</label>
            <br>
            <input type="number" name="celular-usuario" required>

            <br><br>

            <label>Contraseña :</label>
            <br>
            <input type="password" name="contraseña-usuario" required>
            <br><br>
            
            <button type="submit" class="btn fondo-1 btn-block"><h3>Registrarse</h3></button>
            
            </form>
            
            </div>




            <div class="vinculo-celular btn-idioma">Idioma</div>



            <br>
            <br>
            <br>
        
        </div>

        
        
        `);
        
        //opciones del menu celular


        let paginas=["Tienda","Turismo","Cultura"];


        $(".contenedor-menu-nav-cel").append(`

            <a href="index.php"><div class="vinculo-celular elegido">
                Inicio
            </div></a>
        `);


        for(let i=0;i<paginas.length;i++){

            $(".contenedor-menu-nav-cel").append(`

                <a href=""> <div class="vinculo-celular">
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

                    <div class="cont-form-ingresar-desktop">
                    

                        <form class="formulario-ingreso-celular" action="" method="post">

                        <label>Correo electronico :</label>
                        <br>
                        <input type="email" name="correo-usuario" required>
            
                        <br><br>
            
                        <label>Contraseña :</label>
                        <br>
                        <input type="password" name="contraseña-usuario" required>
                        <br><br>
                        
                        <button type="submit" class="btn fondo-1 btn-block"><h3>Ingresar</h3></button>
                        
                        </form>
                    
                    
                    </div>
                    <br>
                    <div class="olvidaste-contraseña">
                    
                        <a href="" class="lost-pass">Olvidaste tu contraseña</a>
                    
                    </div>


                    <br>
                    <div class="espaciado"></div>
                    <br>



                    <div class="vinculo-celular btn-registro">
                        Registrarse   
                        <span class="registrarse-flecha"><i class="fas fa-user-plus"></i></span>                 
                    </div>
    

                    <div class="cont-form-registro-desktop">
                    
                    
                                                            
                            <form class="formulario-registro-celular" action="" method="post">

                            <label>Nombre de usuario :</label>
                            <br>
                            <input type="text" name="nombre-usuario" required>

                            <br><br>

                            <label> Correo electronico :</label>
                            <br>
                            <input type="email" name="correo-usuario" required>

                            <br><br>


                            <label>Pais :</label>
                            <br>
                            <input type="text" name="pais-usuario" required>

                            <br><br>

                            <label>Celular :</label>
                            <br>
                            <input type="number" name="celular-usuario" required>

                            <br><br>

                            <label>Contraseña :</label>
                            <br>
                            <input type="password" name="contraseña-usuario" required>
                            <br><br>
                            
                            <button type="submit" class="btn fondo-1 btn-block"><h3>Registrarse</h3></button>
                            
                            </form>
                                    
                    
                    
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