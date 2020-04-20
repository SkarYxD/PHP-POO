<?php

	abstract class Persona{

		public $intDpi;
		public $strNombre;
		public $intEdad;
		public $mensaje;

		function __construct(int $dpi, string $nombre, int $edad)
		{
			$this->intDpi = $dpi;
			$this->strNombre = $nombre;
			$this->intEdad = $edad;
		}

		abstract public function getDatosPersonales();
		abstract public function setMensaje(string $mensaje);
		abstract public function getMensaje():string;

	}//End Class Persona

?>