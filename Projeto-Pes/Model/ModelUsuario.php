<?php
//MODEL
//class usuario (admin, usuario)

class ModelUsuario
{
    private $nome;
    private $id;
    private $login;
    private $senha;
    private $nivel_acesso;
    private $email;
    
    
    public function __construct($nome, $id, $login, $senha, $nivel_acesso, $email)
    {
        $this->nome         = $nome;
        $this->id           = $id;
        $this->login        = $login;
        $this->senha        = $senha;
        $this->nivel_acesso = $nivel_acesso;
        $this->email        = $email;
    }
    public function cadastroUser()
    {
        echo "<br/>Confirmado o recebimento";
    }
    
    public function validaDados()
    {
        include_once("../conexao1.php");
        
        $conectar = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($conectar, "tcc") or die("Base dados não encontrada");
        
        $var = "SELECT * FROM usuarios where  login='$this->login' AND senha='$this->senha' LIMIT 1";
        
        $result = mysqli_query($conectar, $var);
        
        $resultado = mysqli_fetch_assoc($result);
        echo "Usuario: " . $resultado['nome'];
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Usuario ou senha Inválida";
            return null;
        } else { //define valores atribuidos na sessao do usuario
            $_SESSION['usuarioId']          = $resultado['id'];
            $_SESSION['usuarioNome']        = $resultado['nome'];
            $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
            $_SESSION['usuarioLogin']       = $resultado['login'];
            $_SESSION['usuarioSenha']       = $resultado['senha'];
            $_SESSION['usuarioEmail']       = $resultado['email'];
            
            if ($_SESSION['usuarioNivelAcesso'] == 1) {
                return 1;
            }
            if ($_SESSION['usuarioNivelAcesso'] == 2) {
                return 2;
            }
        }
    }
    
    public function cad_user()
    {
        include_once("C:\wamp64\www\Projeto\conexao1.php");
        $con = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($con, "tcc") or die("Base dados não encontrada");
        // VERIFICA A LIGAÇÃO NÃO TEM ERROS
        if (mysqli_connect_errno()) {
            // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $query = "INSERT INTO usuarios  (nome, email, login, senha, nivel_acesso_id, created) VALUES('$this->nome', '$this->email', '$this->login','$this->senha','$this->nivel_acesso', NOW())";

    


        mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
        
        if (mysqli_affected_rows($con) != 0) {
            return 1;
        }
    }
}


?>