<?php
	
	trait Carrito{
		public $strProducto;
		public $intCantidad;

		public function setCarrito(string $producto, int $cantidad)
		{
			$this->strProducto = $producto;
			$this->intCantidad = $cantidad;
		}


		abstract function getCarrito();

	}

?>