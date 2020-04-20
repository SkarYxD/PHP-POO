<?php

	require_once ("classMueble.php");

	Final class Mesa extends Mueble{

		private $strForma = "";
		protected $strTamanio;
		public $strStatus = "Activo";

		public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio){
			parent::__construct($descripcion, $precio, $marca, $color, $material);

			$this->strTamanio = $tamanio;
		}

		public function setForma(string $forma)
		{

			$this->strForma = $forma;

		}

		function getInfoProducto(){

			$arrProducto = array ('producto' => $this->strDescripcion,
								'precio' => $this->fltPrecio,
								'stock_minimo' => $this->intStockMinimo,
								'estado'=> $this->strStatus,
								'color' => $this->strColor,
								'material' => $this->strMaterial,
								'color' => $this->strColor,
								'tamaño' => $this->strTamanio,
								'forma' => $this->strForma
							);
			return $arrProducto;

		}

	}//End Class Mesa

?>