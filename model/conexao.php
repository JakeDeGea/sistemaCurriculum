<?php
	// Conexão
	$servidor = "localhost";
	$usuario  = "root";
	$senha    = "";
	$banco    = "curriculo";
	$conecta  = mysqli_connect($servidor, $usuario, $senha, $banco);
	mysqli_set_charset($conecta,"utf8");
 ?>
