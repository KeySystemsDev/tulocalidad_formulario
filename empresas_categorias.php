<?php

header('Access-Control-Allow-Origin: *');


    $link = mysql_connect("localhost","keypan5_manuel","sistema"); 
    $db   = mysql_select_db("keypan5_tulocalidad",$link);
    mysql_query('SET NAMES "utf8"',$link);

    $categoria = $_GET['id_categoria'];
    $estado = $_GET['id_estado'];

  	$consulta_mysql = 'SELECT t_empresas.id_empresa,
                              t_empresas.nombre_empresa
                         FROM t_empresas
                   INNER JOIN t_categoria ON t_categoria.id_categoria = t_empresas.id_categoria
                   INNER JOIN t_estados ON t_estados.id_estado = t_empresas.id_estado
                        WHERE t_empresas.id_categoria = '.$categoria.'
                          AND t_empresas.id_estado = '.$estado.'
                     GROUP BY t_empresas.id_empresa';

      $result = mysql_query($consulta_mysql,$link);
      while ($row = mysql_fetch_array($result)){       
          $arreglo[] = $row;
      } 
      echo json_encode($arreglo); 

    mysql_free_result($result);
    mysql_close($link);

?>