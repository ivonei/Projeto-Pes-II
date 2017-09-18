<!DOCTYPE html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
</head>
<?php
include_once("menu_admin.php");
$id = $_GET['id'];
$result = mysqli_query( $conectar, "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
?>
 <div class="container theme-showcase" role="main">
  <div class="page-header">
  <br></br>
	<h1>Vizualizar Usuário</h1>
  </div>
  <div class="row">
	<div class="pull-right">
		<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
		<a href='administrativo.php?link=4&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
		<a href='process_remove_usuario_adm.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
	</div>
  </div>
  <div class="row">
	<div class="col-md-12">
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>ID:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['id'];
				?>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Nome:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['nome'];
				?>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Email:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['email'];
				?>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Usuario:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['login'];
				?>
			</div>		
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Nível de Acesso:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['nivel_acesso_id'];
				?>
			</div>	
	</div>
	<br></br>
	<br></br>
	<br></br>
  <div class="page-header">
	<h1>Nota</h1>
  </div>
  <div class="well">
	<p>Estes dados devem ser preservados e mantidos em segurança!</p>
  </div>
 

</body>
</html>
