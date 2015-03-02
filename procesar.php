<?php

	$i_empresa   = $_POST['i_empresa'];
	$i_rif       = $_POST['i_rif'];
  $i_direccion = $_POST['i_direccion'];
	$i_categoria = $_POST['i_categoria'];
	$i_correo    = $_POST['i_correo'];
	$i_estado    = $_POST['i_estado'];
	$i_web       = $_POST['i_web'];
	$i_local     = $_POST['i_local'];
	$i_local_2   = $_POST['i_local_2'];
	$i_local_3   = $_POST['i_local_3'];
	$i_movil     = $_POST['i_movil'];

    $link = mysql_connect("localhost","keypan5_manuel","sistema"); 
    $db = mysql_select_db("keypan5_tulocalidad",$link);

     $sql = "INSERT INTO t_empresas (nombre_empresa, 
                      rif_empresa, 
                      id_categoria, 
                      correo_empresa, 
                      id_estado, 
                      url_empresa, 
                      telefono_empresa, 
                      telefono_2_empresa, 
                      telefono_3_empresa, 
                      telefono_movil_empresa,
                      icon_empresa,
                      direccion_empresa,
                      position_empresa,
                      positionmap_empresa,
                      horario_empresa) VALUES ('$i_empresa', 
                        '$i_rif', 
                        '$i_categoria', 
                        '$i_correo', 
                        '$i_estado', 
                        '$i_web', 
                        '$i_local', 
                        '$i_local_2', 
                        '$i_local_3',
                        '$i_movil',
                        'icono',
                        '$i_direccion',
                        'position_empresa',
                        'positionmap_empresa',
                        'horario_empresa')";


$result = mysql_query($sql);
   echo "¡Gracias! Hemos recibido sus datos.\n"; 


/*    $sql = "INSERT INTO t_empresas (nombre_empresa, 
    									rif_empresa, 
    									id_categoria, 
    									correo_empresa, 
    									id_estado, 
    									url_empresa, 
    									telefono_empresa, 
    									telefono_2_empresa, 
    									telefono_3_empresa, 
    									telefono_movil_empresa)
                  VALUES ('$i_empresa', 
                  		  '$i_rif', 
                  		  '$i_categoria', 
                  		  '$i_correo', 
                  		  '$i_estado', 
                  		  '$i_web', 
                  		  '$i_local', 
                  		  '$i_local_2', 
                  		  '$i_local_3',
                  		  '$i_movil')',$link);*/

?>