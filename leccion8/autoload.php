<?php
	function autoload($clase)
	{
		//echo $clase.'<br>';
		$url = str_replace("\\","/",$clase.".php");
		//echo $url.'<br>';
		require_once ($url);
	}
	spl_autoload_register('autoload');

?>