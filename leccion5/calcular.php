<?php

	require_once("classOperacion.php");

	$objRaiz = new Calcular();

	echo $objRaiz->raiCuadrada(9);
	echo "<br>";
	echo $objRaiz->potencia(4,3);
	echo "<br>";
	echo $objRaiz->op_basica(50,2,'-');

?>