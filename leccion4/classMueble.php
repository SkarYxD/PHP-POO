<?php

	require_once ("classProducto.php");

	class Mueble extends Producto{

		public $strColor;
		public $strMaterial;
		public $strStatus = "Agotado";

		public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material){
			parent::__construct($descripcion, $precio);

			$this->strMaterial = $material;
			$this->strColor = $color;
		}

		function getInfoProducto(){

			$arrProducto = array ('producto' => $this->strDescripcion,
								'precio' => $this->fltPrecio,
								'stock_minimo' => $this->intStockMinimo,
								'estado'=> $this->strStatus,
								'color' => $this->strColor,
								'material' => $this->strMaterial
							);
			return $arrProducto;

		}

	}//End Class Producto

?>