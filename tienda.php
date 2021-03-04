<?php




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
  Navbar('Inicio','Tienda','Turismo','<i class="fas fa-user"></i>');
  
  
  
  //menu usuarios sin registro
  require_once 'componentes/menu-user.php';
  MenuUsuarioSinRegistro('Correo electronico','Contraseña','Ingresar','Registrarse','Nombre','Pais','Celular','Tienda','Turismo','Inicio','¿Olvidaste tu contraseña?','Acepto términos y condiciones');


  echo '<br><br><br><br>';


  //portada tienda
  require_once 'componentes/tienda/tienda-tienda.php';
  PortadaTienda('Somos exportadores de nuestra cultura');

  
  echo '<br><hr><br>';



  //categorias-buscador
  require_once 'componentes/tienda/categorias-tienda.php';
  require_once 'componentes/tienda/buscador.php';

  //array con las categorias
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

  //contenedor buscador y categoriad
  echo '<div style="width:100%;height:120px;"><div style="width:100%;" class="position-absolute d-flex justify-content-between">';

   Categorias($miscategorias,'Categorias');
   Buscador('Buscar','Buscar producto');
  

  
  echo '</div></div>';








  //cards productos
  require_once 'componentes/tienda/cards-tienda.php';

  echo '<br><hr><br><div" style="width:100%;height:300px;"><div class=" contenedor-cards container-fluid  d-flex flex-wrap justify-content-center">';

  CardsTienda("Sombrero aguadeño tejido",'$ 10.57 USD','32','assets/img/runalotus.gif');
  CardsTienda("Trio copas cubiertas en cuero",'$ 8.57 USD','52','assets/img/copas-png.png');
  CardsTienda("Porta esferos avion",'$ 10.57 USD','52','assets/img/productos/porta-esferos-avion-png.png');
  CardsTienda("Porta esferos cicla",'$ 10.57 USD','52','assets/img/productos/porta-esferos-cicla-png.png');
  CardsTienda("Porta esferos cicla",'$ 10.57 USD','52','assets/img/productos/porta-esferos-jirafa-png.png');
  CardsTienda("Bolso en figue Naranja",'$ 11.57 USD','52','assets/img/productos/bolso-figuenaranja.jpg');
  CardsTienda("Bolso en figue Rojo",'$ 9.57 USD','52','assets/img/productos/bolso-figuerojo.jpg');
  CardsTienda("Bolso en figue Verde",'$ 9.57 USD','52','assets/img/productos/bolso-figueverde.jpg');
  CardsTienda("Aguardientera estilo vueltiao",'$ 12.57 USD','52','assets/img/productos/botella.jpg');
  CardsTienda("Aguardientera estilo Colombia",'$ 10.57 USD','52','assets/img/productos/botella-bandera.jpg');
  CardsTienda("Monedero textil mediano ",'$ 15.57 USD','52','assets/img/productos/monedero-chino-mediano.jpg');
  CardsTienda("Monedero textil pequeño",'$ 6.57 USD','52','assets/img/productos/monedero-chino-pequeño.jpg');
  CardsTienda("Monedero en iraca",'$ 3.57 USD','52','assets/img/productos/monedero-iraca.jpg');
  CardsTienda("Monedero en iraca",'$ 3.57 USD','52','assets/img/productos/llavero1-png.png');
  CardsTienda("Monedero en iraca",'$ 3.57 USD','52','assets/img/productos/llavero2-png.png');

  



  echo '</div></div>';

  echo '<br><hr><br>';



  //section footer
 require_once 'componentes/footer.php';
 Footer();



 //cierre 
  require_once 'componentes/cierre.php';
  Cierre($scripts);



?>