<?php

	require_once("Operacion.php");
	require_once("OperacionesBasicas.php");

	class Calcular implements Operacion,Operacion_basica{

		public function raiCuadrada(float $numero):float
		{
			$total = sqrt($numero);
			return $total;
		}

		public function potencia(int $numero, int $potencia):int
		{
			$total = pow($numero, $potencia);
			return $total;
		}

		public function op_basica(float $cant1, float $cant2, string $operacion)
		{

			if($operacion == "+")
			{
				$result = $cant1 + $cant2;
			}else if($operacion == "-"){
				$result = $cant1 - $cant2;
			}else if($operacion == "*"){
				$result = $cant1 * $cant2;
			}else if($operacion == "/"){
				$result = $cant1 / $cant2;
			}else{
				$result = "Operación no válida";
			}

			return $result;
		}
	}

?>