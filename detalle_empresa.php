<?php

header('Access-Control-Allow-Origin: *');


    $link = mysql_connect("localhost","keypan5_manuel","sistema"); 
    $db   = mysql_select_db("keypan5_tulocalidad",$link);
    mysql_query('SET NAMES "utf8"',$link);

    $empresa = $_GET['id_empresa'];

	  $consulta_mysql = 'SELECT t_empresas.id_empresa,
                              t_empresas.nombre_empresa,
                              t_empresas.correo_empresa,
                              t_empresas.direccion_empresa,
                              t_empresas.horario_empresa,
                              t_empresas.icon_empresa,
                              t_empresas.id_categoria,
                              t_categoria.nombre_categoria,
                              t_estados.nombre_estado,
                              t_empresas.id_estado,
                              t_empresas.positionmap_empresa,
                              t_empresas.position_empresa,
                              t_empresas.rif_empresa,
                              t_empresas.telefono_2_empresa,
                              t_empresas.telefono_3_empresa,
                              t_empresas.telefono_empresa,
                              t_empresas.telefono_movil_empresa,
                              t_empresas.url_empresa
                         FROM t_empresas
                   INNER JOIN t_categoria ON t_categoria.id_categoria = t_empresas.id_categoria
                   INNER JOIN t_estados ON t_estados.id_estado = t_empresas.id_estado
                        WHERE t_empresas.id_empresa = '.$empresa.'';

      $result = mysql_query($consulta_mysql,$link);
        while ($row = mysql_fetch_array($result)){       
          $arreglo[] = $row;
        } 
      echo json_encode($arreglo); 

    mysql_free_result($result);
    mysql_close($link);

?>