<!DOCTYPE html>

<html lang="pt-br">
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon/favicon.ico">
	  <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="../css/dashboard.css" rel="stylesheet">
    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
include("../conexao1.php");
$id = $_GET['id'];
$result = mysqli_query( $conectar, "SELECT * FROM sementes WHERE id = '$id' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);

$categoria_id = $resultado['categoria_id'];
?>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="ProdCad.php">Produtos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="usuario.php">Voltar ao Menu Principal</a></li>
            <li><a href="#">Ajuda</a></li>
			<li><a href="Home.php">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
	

 <div class="container theme-showcase" role="main">
  <div class="page-header">
  <br></br>
	<h1>Vizualizar Sementes</h1>
  </div>
  <div class="row">
	<div class="pull-right">
		<a href='listar_sementes.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
		<a href='editar_sementes.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
		<a href='../Controller/process_remove_sementes.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
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
			    <b>Descrição:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<textarea class="form-control" rows="3" name="descricao"
				'<?php  
					 echo $resultado['descricao'];
				?>'
				></textarea>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Tag:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['tag'];
				?>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Preço:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['preco'];
				?>
			</div>	
            <div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Quantidade:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['quantidade'];
				?>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Marca:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
				<?php  
					 echo $resultado['marca'];
				?>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1">
			    <b>Tipo de Semente:</b>
			</div>
			<div class="col-xs-9 col-sm-111 col-md-11">
					  <?php
                     // $resultado = mysqli_query($conectar, "SELECT * FROM categoriasementes ORDER BY 'id'");
                     // $linhas=mysqli_num_rows($resultado);
									$result=mysqli_query($conectar,"SELECT * FROM categoriasementes");
									while($dados = mysqli_fetch_assoc($result)){
										$id_categoria = $dados['id'];
										?>
										<option value="<?php echo 
										$dados['id']; ?> "<?php
										if($id_categoria==$categoria_id){
											echo 'selectd';
 										}
										?>><?php echo 
										$dados['nome'];?> </option>
								<?php	
								}
							  ?>
			</div>	
	</div>
	<br></br>
	<br></br>
	<br></br>
 
 
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
