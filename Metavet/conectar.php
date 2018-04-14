<?php
	function connect(){
		$link = mysqli_connect("localhost","root",""); // Se hace el conector indicando la direccion, el usuario y su contraseña
		return $link;
        
	}
?>