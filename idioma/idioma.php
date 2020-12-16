<?php

  //cambiando manualmente el idoma de la plataforma
  if(isset($_POST['idioma'])){

    session_start();
    $_SESSION['idioma']=$_POST['idioma'];

    header('Location:../index.php');

  }


  //detectar idioma
  function IdiomaUsuaraio($LanguajeDefault) { 

    $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

    //guardando idioma del navegador
    $data_read=[
        $idioma
    ];

    require_once 'acceso-datos/conexion.php';
    $miquery=mysqli_query($miconexion->Conectando(),'select * from traducciones');


    while($res= mysqli_fetch_assoc($miquery)){

    $data_read[]=$res;
    

    }

    //visualizar idioma del navegador
    //var_dump($data_read[0]);


    if($LanguajeDefault===1){

      
      if($data_read[0]==='es'){

        return $data_read[1];
        
      }else if($data_read[0]==="en"){

        return $data_read[2];

      }else if($data_read[0]==="pt"){

        return $data_read[3];

      }


    }else{

      switch ($LanguajeDefault) {
       
        case 'Español':
         
          return $data_read[1];
          
        break;

        case 'Ingles':
         
          return $data_read[2];
        
        break;

        case 'Portugues':
         
          return $data_read[3];
        
        break;
        
        default:

          return $data_read[2];

        break;
      }//end switch


    }//end else
     

  }// end function

?>