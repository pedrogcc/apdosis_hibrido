<?php
	
	require_once('../clases/conexion.php');
	
	class ventasd{		
				
		public static function usuarios($user) {
			$reg = conexion::sqlGet("select nombre from usuarios where user='".$user."'");			
			return $reg;
		}
		
	}
	
?>