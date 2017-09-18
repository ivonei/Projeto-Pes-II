<?php
include "conexao.php";

$var = "insert into public.\"Usuario\" (nome, telefone, cidade) values ('joao', '55555','Cascavel')";
$result = pg_query($conexao, $var);



if(pg_affected_rows($result) == 0){
	echo "Não conseguiu inserir";
}else{
	echo "Dados inseridos com sucesso";
}

?>