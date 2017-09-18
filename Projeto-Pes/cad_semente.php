<!DOCTYPE html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
</head>
<?php
include_once("menu_admin.php");
?>
 <div class="container theme-showcase" role="main">
  <div class="page-header">
  <br></br>
	<h1>Cadastrar de Semente</h1>
  </div>
  <div class="row">
	<div class="col-md-12">
				  <form class="form-horizontal" method="POST" action="process_cad_usuario_adm.php">
				  
				<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="nome"  placeholder="Nome Completo">
				</div>
			  </div>
			    
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" name="email"  placeholder="Email">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="usuario"  placeholder="Usuário">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="senha" placeholder="Senha">
				</div>
			  </div>
			  
			   <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Nível de Acesso</label>
				<div class="col-sm-10">
							<select class="form-control" name="nivel_de_acesso">
							  <option value="1">Administrativo</option>
							  <option value="2">Usuário</option>
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

  <div class="page-header">
	<h1>Nota</h1>
  </div>
  <div class="well">
	<p>Estes dados devem ser preservados e mantidos em segurança!</p>
  </div>

</body>
</html>
