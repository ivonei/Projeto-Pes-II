<?php
 session_start();
// echo "Produtos, sementes, agrotóxico, embalagem, etiqueta";

include("Admin/menu_admin.php");
include("../conexao1.php");

$id_user = $_SESSION['usuarioId'];
//$result = mysqli_query( $conectar, "SELECT * FROM categoriasementes WHERE id = '$id' LIMIT 1");
$resultado = mysqli_query($conectar, "SELECT * FROM agrotoxico WHERE id_user = '$id_user' ");
$linhas=mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon/favicon.ico">

    <title>Produtos</title>

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
			<li><a href="../Model/sair.php">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Semente</a></li>
            <li><a href="#">Agrotóxico</a></li>
            <li><a href="#">Etiqueta</a></li>
			<li><a href="#">Embalagem</a></li>
          </ul>
		      <!--
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>

          <ul class="nav nav-sidebar">
            <li><a href="">Voltar ao Menu</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Produtos</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../Imagem/Semente.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4> Sementes</h4>
			   <br><a href='cad_semente.php'><button type='button' class='btn btn-success'>Cadastrar</button></a></br>
			   <br><a href='listar_sementes.php'><button type='button' class='btn btn-primary'>Listar</button></a></br>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../Imagem/Agrotoxico.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Agrotóxico</h4>
			   <br><a href='#'><button type='button' class='btn btn-success'>Cadastrar</button></a></br>
			   <br><a href='#'><button type='button' class='btn btn-primary'>Listar</button></a></br>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../Imagem/Etiqueta.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Etiqueta</h4>	   
			   <br><a href='#'><button type='button' class='btn btn-success'>Cadastrar</button></a></br>
			   <br><a href='#'><button type='button' class='btn btn-primary'>Listar</button></a></br>
		      </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../Imagem/Embalagem.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4> Embalagem</h4>
			   <br><a href='#'><button type='button' class='btn btn-success'>Cadastrar</button></a></br>
			   <br><a href='#'><button type='button' class='btn btn-primary'>Listar</button></a></br>
            </div>
          </div>

          <h2 class="sub-header">Agrotoxicos</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                  <tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Preço</th>
						<th>Quantidade</th>
						<th>Marca</th>
						<th>Ações</th>
				  </tr>
              </thead>
              <tbody>
               <?php
			while($linhas = mysqli_fetch_array($resultado)){
			  echo "<tr>";
			  echo "<td>".$linhas['id']."</td>";
			  echo "<td>".$linhas['nome']."</td>";
		      echo "<td>".$linhas['preco']."</td>";
			  echo "<td>".$linhas['quantidade']."</td>";
			  echo "<td>".$linhas['marca']."</td>";			  
		   ?>			 
			<td>
			   <a href='visual_agrotoxico.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-primary'>Visualizar</button></a>			
			   <a href='editar_agrotoxico.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-warning'>Editar</button></a>
			   <a href='../Controller/process_remove_agrotoxico.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-danger'>Remover</button></a>
			  <?php
			  echo "<tr>";
			}
		?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

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