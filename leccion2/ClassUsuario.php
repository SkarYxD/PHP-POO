<?php 

	class Usuario{

		private $strNombre;
		private $strEmail;
		private $strTipo;
		private $strClave;
		protected $strFechaRegistro;
		static $strEstado = "Activo";

		function __construct(string $nombre, string $email, string $tipo)
		{

			$this->strNombre = $nombre;
			$this->strEmail = $email;
			$this->strTipo = $tipo;
			$this->strClave = rand();
			$this->strFechaRegistro = date('Y-m-d H:m:s');

		}

		public function getNombre():string
		{
			return $this->strNombre;
		}

		public function getEmail():string
		{
			return $this->strEmail;
		}

		public function getPerfil()
		{
			echo "Datos del Usuario <br>";
			echo "Nombre: ". $this->strNombre."<br>";
			echo "Email: ". $this->strEmail."<br>";
			echo "Clave: ". $this->strClave."<br>";
			echo "FechaRegistro: ". $this->strFechaRegistro."<br>";
			echo "Estado: ". self::$strEstado."<br>";
		}

		public function setCambiarClave(string $pass){
			$this->strClave = $pass;
		}

	}//End Class

?>