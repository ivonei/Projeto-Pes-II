<?php
include 'C:\wamp64\www\Projeto-Pes\Controller\process_controle_empregados.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome            = $_POST["nome"];
    $telefone        = $_POST["telefone"];
    $cpf             = $_POST["cpf"];
    $funcao          = $_POST["funcao"];
    $categoria       = $_POST["categoria"];
	$salario         = $_POST["salario"]; 
    $id = "";
//    $id_user         = $_SESSION['usuarioId'];
	
$obj = new ControleEmpregados;
$x = $obj->cadastrar($nome, $id, $telefone, $funcao, $cpf, $categoria, $salario);
}
else{
}
if($_SERVER['REQUEST_METHOD']==='P'){
 $id = $_GET["id"];
 $telefone        = ""; 
 $funcao          = "";
 $cpf             = "";
 $categoria       = "";
 $salario         = "";
 $nome            = "";

//encaminhar os dados para a Model
$obj = new ControleEmpregados;
$x = $obj->remove($nome, $id, $telefone, $funcao, $cpf, $categoria, $salario);

}else{}
?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   <link href="../../css/usuario.css" rel="stylesheet">
   
  <link rel="icon" href="../../favicon/favicon.ico">
  <title>Empregados</title>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="../../css/dashboard.css" rel="stylesheet">
    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../js/ie-emulation-modes-warning.js"></script>

</head>
<?php
include_once("../../conexao1.php");
session_start();
//$id = $_GET['id'];
$id_user = $_SESSION['usuarioId'];
$resultado = mysqli_query($conectar, "SELECT * FROM empregados WHERE id_user = '$id_user' ");
$linhas=mysqli_num_rows($resultado);
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
          <a class="navbar-brand" href="empregados.php">Empregados</a>
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
<br></br>
<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Empregados</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw -square -circle fa-plus-square"></i>Novo Empregado</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                            <tbody>
									<thead>
		  <tr>
			<th>Função</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>CPF</th>
			<th> </th>
			<th>Salário </th>
		  </tr>
		</thead>
						            <?php
												while($linhas = mysqli_fetch_array($resultado)){
												  echo "<tr>";
												  if($linhas['funcao'] == 1){
												     echo "<td>"."Maquinista"."</td>";	
												  }else{
													 echo "<td>"."Agronomo"."</td>";
												  } 
												  echo "<td>".$linhas['nome']."</td>";
												  echo "<td>".$linhas['telefone']."</td>";
												 
												  echo "<td>".$linhas['cpf']."</td>";
												  
												  if($linhas['categoria_id'] == 1){
												     echo "<td>"."Contratado"."</td>";	
												  }else{
													 echo "<td>"."Temporário"."</td>";
												  }
												  echo "<td>".$linhas['salario']."</td>";													  
											   ?>
									<td>
								       <a href='#'<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-warning'>Editar</button></a>
									   <a href='../../Controller/process_remove_empregado.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-danger'>Remover</button></a>
									  <?php
									  echo "<tr>";
									}
                                		?>	
<!--										
                                <tr>
                                    <td>
                                        <a href="#"><i class="fa fa-2x fa-fw fa-eye-slash"></i></a>
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Maquinista</b>
                                        </h4>
                                        <p>@claudioramos</p>
                                    </td>
                                    <td>
                                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Claudio</b>
                                        </h4>
                                        <a href="mailto:claudia@mail.com">claudio@mail.com</a>
                                    </td>
                                    <td>Contratado</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                            <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Alterar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><i class="fa fa-2x fa-fw fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Agronomo</b>
                                        </h4>
                                        <p>@marcos</p>
                                    </td>
                                    <td>
                                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Marcos</b>
                                        </h4>
                                        <a href="mailto:ana@mail.com">marcos@mail.com</a>
                                    </td>
                                    <td>contratado</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                            <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Alterar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><i class="fa fa-2x fa-fw -alt fa-eye-slash"></i></a>
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Maquinista</b>
                                        </h4>
                                        <p>@Carlos Silva</p>
                                    </td>
                                    <td>
                                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Carlos Silva</b>
                                        </h4>
                                        <a href="mailto: carlos@mail.com"> carlos@mail.com</a>
                                    </td>
                                    <td>temporário</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                            <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Alterar</button>
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="fade modal" id="usuario">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Novo Empregado</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method = "POST">
                            <fieldset>
                                <!-- Form Name -->
                                <!-- Prepended text-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nome">Nome</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nome" name="nome" class="form-control" placeholder="Nome Completo" type="text" required="">
                                        </div>
                                    </div>
                                </div>
								<div class="form-group">
                                <label class="col-md-4 control-label" for="nome">Telefone</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input id="nome" name="telefone" class="form-control" placeholder="" type="text" required="">
                                        </div>
                                    </div>
                                </div>
								<div class="form-group">
                                <label class="col-md-4 control-label" for="nome">CPF</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-address-card-o"></i>
                                            </span>
                                            <input id="nome" name="cpf" class="form-control" placeholder="" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="departamento">Função</label>
                                    <div class="col-md-5">
                                        <select id="departamento" name="funcao" class="form-control">
                                            <option value="1">Maquinista</option>
                                            <option value="2">Agronomo</option>
                                        </select>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-4 control-label" for="departamento"></label>
                                    <div class="col-md-5">
                                        <select id="departamento" name="categoria" class="form-control">
                                            <option value="1">Contratado</option>
                                            <option value="2">Temporario</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- File Button -->
                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nome">Salário por Hora</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-money"></i>
                                            </span>
                                            <input id="nome" name="salario" class="form-control" placeholder="00,00" type="text" required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>
                                <!-- Button -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../../js/docs.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>