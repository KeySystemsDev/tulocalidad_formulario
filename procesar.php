<?php

	$i_empresa   = strtolower($_POST['i_empresa']);
	$i_rif       = strtolower($_POST['i_rif']);
    $i_direccion = strtolower($_POST['i_direccion']);
	$i_categoria = strtolower($_POST['i_categoria']);
	$i_correo    = strtolower($_POST['i_correo']);
	$i_estado    = strtolower($_POST['i_estado']);
	$i_web       = strtolower($_POST['i_web']);
	$i_local     = strtolower($_POST['i_local']);
	$i_local_2   = strtolower($_POST['i_local_2']);
	$i_local_3   = strtolower($_POST['i_local_3']);
	$i_movil     = strtolower($_POST['i_movil']);

    $link = mysql_connect("localhost","keypan5_manuel","sistema"); 
    $db   = mysql_select_db("keypan5_tulocalidad",$link);
    mysql_query('SET NAMES "utf8"',$link);
    
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
                         horario_empresa) 
<<<<<<< HEAD
                  VALUES ('$i_empresa', 
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
    header('Location: http://keysystems.com.ve/procesado/'); 


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
=======
>>>>>>> origin/master
                  VALUES ('$i_empresa', 
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
    header('Location: http://keysystems.com.ve/tulocalidad/procesado'); 

?>