<?php

  //cambio de idoma manualmente
  session_start();
  if(isset($_SESSION['idioma'])){

    require_once 'idioma/idioma.php';
    $lenguaje=IdiomaUsuaraio($_SESSION['idioma']);


  }else{

    //detectando idioma por defecto
    require_once 'idioma/idioma.php';
    $lenguaje=IdiomaUsuaraio(1);
    //var_dump($lenguaje);

  }




  $estilos=[
    'librerias/bootstrap/css/bootstrap.css',
    'librerias/icons/css/all.css',
  
  ];
  
  $scripts=[
  
    'librerias/bootstrap/js/bootstrap.min.js',
    'librerias/icons/js/all.js'
  
  
  ];
  
  
  //head
  require_once 'componentes/head.php';
  Head('es','Inicio',$estilos);
  
  
  //jquery
  echo '<script src="librerias/jquery/jquery-3.5.1.js"></script>';
  
  
  //navbar
  require_once 'componentes/navbar.php';
  Navbar($lenguaje['inicio'],$lenguaje['tienda'],$lenguaje['turismo'],'<i class="fas fa-user"></i>');
  
  
  
  //menu usuarios sin registro
  require_once 'componentes/menu-user.php';
  MenuUsuarioSinRegistro($lenguaje['email'],$lenguaje['contraseña'],$lenguaje['registrarse'],$lenguaje['ingresar'],$lenguaje['usuario'],$lenguaje['pais'],$lenguaje['celular'],$lenguaje['idiomaInterfaz'],$lenguaje['español'],$lenguaje['ingles'],$lenguaje['portuges'],$lenguaje['aleman'],$lenguaje['ruso'],$lenguaje['Mandarin'],$lenguaje['guardar'],$lenguaje['tienda'],$lenguaje['turismo'],$lenguaje['inicio'],$lenguaje['olvidar'],$lenguaje['selectIdioma'],$lenguaje['Terminos']);


  echo '<br><br><br><br>';


  //portada tienda
  require_once 'componentes/tienda/tienda-tienda.php';
  PortadaTienda($lenguaje['exportadoresTienda']);

  
  echo '<br><hr><br>';



  //categorias-buscador
  require_once 'componentes/tienda/categorias-tienda.php';
  $miscategorias=array(

    'Culturas',
    'Sombreros',
    'Jarrones',
    'Joyeria',
    'Tejidos',
    'Piedras preciosas',
    'Bolsos y maletas',
    'Aguardienteras',
    'Cuero'

  );

  echo '<div style="width:100%;height:120px;"><div style="width:100%;" class="position-absolute d-flex justify-content-around">';

   Categorias($miscategorias);
   require_once 'componentes/tienda/buscador.php';

  
  echo '</div></div>';

  ScriptCategorias();






  //cards productos
  require_once 'componentes/tienda/cards-tienda.php';

  echo '<div" style="width:100%;height:300px;"><div class=" contenedor-cards container-fluid  d-flex flex-wrap justify-content-center">';

  CardsTienda("Sombrero aguadeño tejido",'$ 10.57 USD','32','assets/img/runalotus.gif');
  CardsTienda("Sombrero aguadeño tejido",'$ 10.57 USD','42','assets/img/runalotus.gif');
  CardsTienda("Trio copas cubiertas en cuero",'$ 10.57 USD','52','assets/img/copas-png.png');
  CardsTienda("Trio copas cubiertas en cuero",'$ 10.57 USD','62','assets/img/copas-png.png');
  CardsTienda("Trio copas cubiertas en cuero",'$ 10.57 USD','72','assets/img/copas-png.png');
  
  echo '</div></div>';

  echo '<br><hr><br>';



  //section footer
 require_once 'componentes/footer.php';
 Footer();



 //cierre 
  require_once 'componentes/cierre.php';
  Cierre($scripts);



?>