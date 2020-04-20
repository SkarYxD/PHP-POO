<?php

	class Operacion{

		public $cantidadUno = 0;
		public $cantidadDos = 0;
		public $resultado = 0;

		function __construct($intCant1, $intCant2){

			$this->cantidadUno = $intCant1;
			$this->cantidadDos = $intCant2;

		}

		public function getSuma(){

			$this->resultado = $this->cantidadUno + $this->cantidadDos;
			return $this->resultado;

		}

		public function getResta(){

			$this->resultado = $this->cantidadUno - $this->cantidadDos;
			return $this->resultado;

		}

		public function getMultiplicacion(){

			$this->resultado = $this->cantidadUno * $this->cantidadDos;
			return $this->resultado;

		}

		public function getDivision(){

			$this->resultado = $this->cantidadUno / $this->cantidadDos;
			return $this->resultado;

		}

	}//End Class Operacion

	?>