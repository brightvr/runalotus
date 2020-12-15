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


  //cierre 
    require_once 'componentes/cierre.php';
    Cierre($scripts);


?>