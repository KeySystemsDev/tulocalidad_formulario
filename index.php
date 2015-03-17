<head>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://sscol.jebal.comuv.com/css/font.css">
	<link rel="stylesheet" href="style.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<title>.:Tu Localidad:.</title>
</head>
<body>

  	<div class="ribbon"></div>
  	<div class="login">
  		<div>
    		<img class="img-logo-tulocalidad"src="img/tulocalidad.png">
  		</div>
  		<p>Registra tu empresa para el directorio</p>
		<form name="formulario" action="procesar.php" method="post">
			<div class="input">
			  	<div class="blockinput">
			    	<i class="fa fa-building-o"></i><input type="text" placeholder="Empresa" name="i_empresa" required>
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-sort-numeric-asc"></i><input maxlength="12" type="text" placeholder="Rif." name="i_rif" required>
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-road"></i><input type="text" placeholder="Dirección" name="i_direccion" required>
			  	</div>
			  	<div class="blockinput">
					<?php  
						// Consultar la base de datos
						$link                     = mysql_connect("localhost","keypan5_manuel","sistema"); 
						$db                       = mysql_select_db("keypan5_tulocalidad",$link);
						$consulta_mysql           = 'SELECT id_categoria, nombre_categoria FROM t_categoria';
						$resultado_consulta_mysql = mysql_query($consulta_mysql,$link);
						     
						echo '<i class="fa fa-th-list"></i><select name="i_categoria" required>';
						echo '<option class="option" value="" selected>Seleccionar</option>';
					  	while($fila=mysql_fetch_array($resultado_consulta_mysql)){
					    	echo '<option class="option" value="'.$fila['id_categoria'].'">'.utf8_encode($fila['nombre_categoria']).'</option>';
					 	}
						echo "</select>";
					?>
			  	</div>

			  	<div class="blockinput">
			    	<i class="fa fa-envelope"></i><input type="email" placeholder="Correo" name="i_correo" required>
			  	</div>
			    <div class="blockinput">
				   	<?php  
				    	// Consultar la base de datos
						$link                     = mysql_connect("localhost","keypan5_manuel","sistema"); 
						$db                       = mysql_select_db("keypan5_tulocalidad",$link);
						$consulta_mysql           = 'SELECT id_estado, nombre_estado FROM t_estados';
						$resultado_consulta_mysql = mysql_query($consulta_mysql,$link);
				         
					    echo '<i class="fa fa-dot-circle-o"></i><select name="i_estado" required>';
					    echo '<option class="option" value="" selected>Seleccionar</option>';
				      	while($fila=mysql_fetch_array($resultado_consulta_mysql)){
				        	echo '<option class="option" value="'.$fila['id_estado'].'">'.utf8_encode($fila['nombre_estado']).'</option>';
				     	}
				     	echo "</select>"; 
				   	?>
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-chain-broken"></i><input type="url" placeholder="Web" name="i_web">
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-phone-square"></i><input type="text" maxlength="11" placeholder="Telefono Local" name="i_local" required>
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-phone-square"></i><input type="text" maxlength="11" placeholder="Telefono Local 2" name="i_local_2">
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-phone-square"></i><input type="text" maxlength="11" placeholder="Telefono Local 3" name="i_local_3">
			  	</div>
			  	<div class="blockinput">
			    	<i class="fa fa-tablet"></i><input type="text" maxlength="11" placeholder="Telefono Movil" name="i_movil">
			  	</div>
			</div>
			<button type="submit">Registrar</button>
		</form>
  	</div>
  	<br><br>

  	<h2>Un directorio pensado para ti ...</h2>
  	<div class="ribbon ior"></div>
  	<div class="andrid-play">
	    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ionicframework.tulocalidad511234">
	      	<img class="android-img" src="img/Download-Android-App.png" alt="ggIO">
	    </a>
  	</div>
  	<br><br>
</body>