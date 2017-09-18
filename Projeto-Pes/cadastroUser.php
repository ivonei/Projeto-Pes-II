 <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/telaSec.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>    
    <div class="container">
      <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="recovery-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastro Usuário</h3>
                </div>
                <div class="panel-body">
          
        <form id="formExemplo" data-toggle="validator" role="form">
            <div class="form-group">
                <label for="textNome" class="control-label">Nome</label>
                <input id="textNome" class="form-control" placeholder="Digite seu Nome..." type="text">
            </div>
            <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label>
                <input id="inputEmail" class="form-control" placeholder="Digite seu E-mail" type="email">
            </div>
          
            <div class="form-group">
                <label for="inputPassword" class="control-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha...">
            </div>
          
            <div class="form-group">
                <label for="inputConfirm" class="control-label">Confirme a Senha</label>
                <input type="password" class="form-control" id="inputConfirm" placeholder="Confirme sua Senha...">
            </div>
            <div class="form-group" >
              
                    <div class="btn-group " data-toggle="buttons">
                        <label class="btn btn-primary  btn-lg active ">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked > Secretária
                        </label>
                        <label class="btn btn-primary btn-lg">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Médico
                        </label>
                    </div>
               
            </div>
            <div class="form-group" style="padding-top: 4px; ">
                <button class="boton btn-lg btn-primary btn-block" type="submit">Registrar</button>
                <button class="boton btn-lg btn-primary btn-block" type="button" onclick="window.location.href='loginCampgnolo.html'"">Cancelar</button>
            </div>
            
        </form>
        


</div></div></div></div>


        </div>
</body>
