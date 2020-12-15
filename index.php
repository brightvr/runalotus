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
MenuUsuarioSinRegistro('Correo electronico','Contraseña','Registrarse','Ingresar','Nombre de usuario','Pais','Celular','Idioma','Español','Ingles','Portugues','Guardar','Tienda','Turismo','Inicio','¿Olvidaste tu contraseña?');


//portada principal
require_once 'componentes/inicio/portada-index.php';
PortadaIndex('Colombia','Explorar');

echo '<br></br><br><hr><br><br>';

//seccion tienda
require_once 'componentes/inicio/tienda-index.php';
SectionTienda('Tienda','Productos que cuentan historias, la expresión de nuestras raíces convertida en forma...','Ver tienda');

echo '<br><br><hr><br><br>';

//seccion turismo
require_once 'componentes/inicio/turismo-index.php';
SectionTurismo('Turismo','<span class="resaltado">Colombia </span>el segundo pais mas biodiverso del mundo','Mas de <span class="resaltado">50.000</span> especies registradas','Conoce las <span class="resaltado">maravillas de Colombia </span>,sus paisajes y lugares únicos','Conocer más');

echo '<br><br><hr><br><br>';

//section cultura
require_once 'componentes/inicio/cultura-index.php';
CulturaIndex('Cultura','Civilizaciones ancestrales que habitaron estos territorios,sus creencias, arte y sociedad','Conocer más');

echo '<br><hr><br>';

//section footer
require_once 'componentes/footer.php';
Footer();

//cierre 
require_once 'componentes/cierre.php';
Cierre($scripts);


?>
    


