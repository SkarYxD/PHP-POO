<?php 
	require_once ("ClassUsuario.php");


	$objUsuarioUno = new Usuario("Joaquin Centurion","jkdev@gmail.com","Admin");

	$objAndrea = new Usuario("Andrea Arana","andrearana@gmail.com","Cliente");


	echo $objUsuarioUno->getPerfil();

	echo "<br><br>";

	echo $objAndrea->getPerfil();
	$objAndrea->setCambiarClave("123456789");

	echo "<br><br>";
	echo $objAndrea->getPerfil();
?>