<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/telaSec.css">
    <script type="text/javascript" src="js/mainSec.js"></script>
</head>

<body>       
<form class="form-horizontal">
 <fieldset>
	<div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="recovery-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Atualização de Perfil</h3>
                </div>
                <div class="panel-body">
                	<div class="form-group">
            <label class="col-md-2 control-label" for="nome">Nome</label>  
            <div class="col-md-4">
            <input id="nome" name="nome" type="text" placeholder="Entre com o Nome" class="form-control input-md" required="">
              
            </div>
          <!-- Text input-->
            <label class="col-md-2 control-label" for="cpf">CPF</label>  
            <div class="col-md-3">
            <input id="cpf" name="cpf" type="text" placeholder="Numero do CPF" class="form-control input-md" maxlength="11" pattern="[0-9]+$">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="datanascimento">Data de Nascimento</label>  
            <div class="col-md-2">
            <input id="datanascimento" name="datanascimento" type="text" placeholder="dd/mm/aaaa" class="form-control input-md" maxlength="10" onkeypress="mascaraDN(this)" required="">
            
            </div>

          <!-- Select Basic -->
            <label class="col-md-4 control-label" for="sexo">Sexo</label>
            <div class="col-md-3">
              <input id="sexo" name="sexo" class="form-control" >
            </div>

          </div>        

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="CEP">CEP</label>  
              <div class="col-md-2">
                <input id="cep" name="cep" type="search" placeholder="99999-999" value="" required="" class="form-control input-md" maxlength="8" pattern="[0-9]+$">
              </div>

            <label class="col-md-4 control-label" for="email">e-mail</label>
            <div class="col-md-3">
              <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">Rua</span>
                  <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text">
                </div>
              </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Nº</span>
                <input id="numero" name="numero" class="form-control" placeholder="" required="" type="text">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon">Bairro</span>
                <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text">
              </div>
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-2 control-label" for="prependedtext"></label>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">Cidade</span>
                <input id="cidade" name="cidade" class="form-control" placeholder="" required=""   type="text">
              </div>
            </div>
             <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <input id="estado" name="estado" class="form-control" placeholder="" required="" type="text">
              </div>
            </div>
            	<button class="btn btn-nav" type="button" onclick="window.location.href='atualizarPerfil.php'">Salvar Alterações</button>

          </div>        
     	</div>
     </fieldset>

<form class="form-horizontal">
 <fieldset>
	<div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="recovery-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Anotações</h3>
                </div>
                <div class="panel-body">
                	<div class="col-md-12">
			  			<div class="form-group">
			  			 	<textarea class="form-control" style="padding-bottom: 250px" id="description" placeholder="Anotações sobre o Pacientes"></textarea>
			  			 	<div class="form-group">
                    			<button class="btn btn-nav" type="submit">Salvar</button>
                    			<button class="btn btn-nav" type="button" onclick="window.location.href='mainSecretaria.php'"">Cancelar</button>
                			</div>
			  			</div>
			  	</div>
     	</div>
     </fieldset>
</body>