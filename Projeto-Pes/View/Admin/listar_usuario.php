
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<div>
<title>Administrativo</title>
</div>
 <link href="../../css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="../../theme.css" rel="stylesheet">
<script src="../../js/ie-emulation-modes-warning.js"></script>
</head>

<body> -->
<?php
include("menu_admin.php");
include("../../conexao1.php");
$resultado = mysqli_query($conectar, "SELECT * FROM usuarios ORDER BY 'id'");
$linhas=mysqli_num_rows($resultado);
?>
 <div class="container theme-showcase" role="main">
  <div class="page-header">
  <br></br>
	<h1>Lista de Usuários</h1>
  </div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Nível de acesso</th>
			<th>Ações</th>
		  </tr>
		</thead>
		<tbody>
		<?php
			while($linhas = mysqli_fetch_array($resultado)){
			  echo "<tr>";
			  echo "<td>".$linhas['id']."</td>";
			  echo "<td>".$linhas['nome']."</td>";
			  echo "<td>".$linhas['email']."</td>";
			  echo "<td>".$linhas['nivel_acesso_id']."</td>";
			  //falta implementar para onde redimenciona os botões
           ?>			 
			<td>  
			   <a href='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-primary'>Visualizar</button></a>
               <a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-warning'>Editar</button></a>
			   <a href='process_remove_usuario_adm.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-danger'>Remover</button></a>
			  <?php
			  echo "<tr>";
			}
		?>
		</tbody>
	  </table>
	</div>

  <div class="page-header">
	<h1>Nota</h1>
  </div>
  <div class="well">
	<p>Estes dados devem ser preservados e mantidos em segurança!</p>
  </div>

</body>
</html>
