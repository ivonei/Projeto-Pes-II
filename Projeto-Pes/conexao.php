<?php

$conexao = pg_connect("host = localhost port = 5432 user = postgres password = postgres dbname = banco")
or die ("Erro na conexao");
echo ("Banco Conectado");

?>
	