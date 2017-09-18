<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="favicon/favicon.ico">
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
         </div>
      </div>
      <div class="page-header">
         <br></br>
         <h1>Cadastrar de Semente</h1>
      </div>
      <div class="row">
      <div class="col-md-12">
         <form class="form-horizontal" method="POST" action="../Controller/process_cad_sementes.php">
            <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="nome"  placeholder="Nome da Semente">
               </div>
            </div>
            <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Descrição</label>
               <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name="descricao" placeholder="Descrição sobre a semente"> </textarea>
               </div>
            </div>
            <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="tag"  placeholder="Tag">
               </div>
            </div>
            <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Preço</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="preco"  placeholder="00,00">
               </div>
            </div>
            <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Quantidade</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="quantidade"  placeholder="0">
               </div>
            </div>
            <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="marca"  placeholder="Marca">
               </div>
            </div>
            <div class="form-group">
               <label for="inputPassword3" class="col-sm-2 control-label">Tipos de Sementes</label>
               <div class="col-sm-10">
                  <select class="form-control" name="categoria_id">
                     <?php
                        // $resultado = mysqli_query($conectar, "SELECT * FROM categoriasementes ORDER BY 'id'");
                        // $linhas=mysqli_num_rows($resultado);
                        $resultado=mysqli_query($conectar,"SELECT * FROM categoriasementes");
                        while($dados = mysqli_fetch_assoc($resultado)){
                        ?>
                     <option value="<?php echo 
                        $dados['id']; ?> " ><?php echo 
                        $dados['nome'];?> </option>
                     <?php 
                        }
                         ?>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
               </div>
            </div>
         </form>
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