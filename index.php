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


//portada principal
require_once 'componentes/inicio/portada-index.php';
PortadaIndex('Colombia',$lenguaje['explorar']);

echo '<br></br><br><hr><br><br>';

//seccion tienda
require_once 'componentes/inicio/tienda-index.php';
SectionTienda($lenguaje['tienda'],$lenguaje['sectionTienda'],$lenguaje['verTienda']);

echo '<br><br><hr><br><br>';

//seccion turismo
require_once 'componentes/inicio/turismo-index.php';
SectionTurismo($lenguaje['turismo'],$lenguaje['sectionTurismo1'],$lenguaje['sectionTurismo2'],$lenguaje['sectionTurismo3'],$lenguaje['conocerMas']);

echo '<br><br><hr><br><br>';

//section cultura
require_once 'componentes/inicio/cultura-index.php';
CulturaIndex($lenguaje['cultura'],$lenguaje['sectionCultura'],$lenguaje['conocerMas']);

echo '<br><hr><br>';

//section footer
require_once 'componentes/footer.php';
Footer();

//cierre 
require_once 'componentes/cierre.php';
Cierre($scripts);


?>
    

  