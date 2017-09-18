<?php
$conexao = new mysqli("localhost", "root", "","usuario");

if (mysqli_connect_errno())
	trigger_error(mysqli_connect_error());
else
		echo "Connectado";


?>