<?php

header('Access-Control-Allow-Origin: *');


    $link = mysql_connect("localhost","keypan5_manuel","sistema"); 
    $db   = mysql_select_db("keypan5_tulocalidad",$link);
    mysql_query('SET NAMES "utf8"',$link);

  	$consulta_mysql = 'SELECT t_empresas.id_estado,
           							      t_estados.nombre_estado
      								   FROM t_empresas
								   INNER JOIN t_estados ON t_estados.id_estado = t_empresas.id_estado
  							     GROUP BY t_empresas.id_estado';

  	$result = mysql_query($consulta_mysql,$link);
      while ($row = mysql_fetch_array($result)){       
          $arreglo[] = $row;
      } 
    echo json_encode($arreglo); 

    mysql_free_result($result);
    mysql_close($link);

?>