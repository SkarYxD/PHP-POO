<?php
	function autoload($class)
	{
		require_once ($class.".php");
		echo $class.".php"."<br>";
	}
	spl_autoload_register('autoload');
?>