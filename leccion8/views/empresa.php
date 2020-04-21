<?php

	require_once("../autoload.php");

	use controllers\Empleado;
	use controllers\Cliente;
	use controllers\Persona;

	$objEmpleado = new Empleado(78978,"Joaquin Centurion",27);
	$objEmpleado->setPuesto("Administrador");
	$objEmpleado->setMensaje("Bienvenido Empleado ");

	echo $objEmpleado->getMensaje();
	echo $objEmpleado->getDatosPersonales();
	echo "Puesto:".$objEmpleado->getPuesto();

	echo "<br><br>";
	$objCliente = new Cliente(43443,"Elena No",23);
	$objCliente->setCredito(1000);
	$objCliente->setMensaje("Bienvenido Cliente ");
	
	echo $objCliente->getMensaje();
	echo $objCliente->getDatosPersonales();
	echo "Créditos:".$objCliente->getCredito();

	echo "<br><br>";
	$mensaje = new Persona();
	echo $mensaje->prueba_c();
	
?>