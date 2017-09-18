<?php
include "mySQL.php";

$var = "insert into tb_usuario (nome, sobrenome, senha) values ('pedro', 'silva','Cascavel')";
$result = $conexao -> query($var);


if($conexao->affected_rows == 0){
	echo "erro na inserção";
}else{
	echo "Inserção realizada";
}



$nova = "select *  from tb_usuario";
$resultado = $conexao->query($nova);
?>

<table class="table table-condensed">
<tr>
  <td class="active">ID</td>
  <td class="success">NOME</td>
  <td class="warning">SOBRENOME</td>
  <td class="info">SENHA</td>
</tr>
<?php
while($res = $resultado->fetch_array()){
	echo $res[0]." - ".$res[1]." - ".$res[2]. " - ".$res[3]."<br>";	
}
?>
</table>

