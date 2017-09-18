<?php
//class empregado
class Empregado{
	private $id;
    private $id_user;
	public $nome;
	private $telefone;
	public $funcao; //maquinista, agronomo,
	public $cpf;
	private $categoria; //temporario ou contratado
	private $salario;
	
	public function __construct($nome, $id, $id_user, $telefone, $funcao, $cpf, $categoria, $salario)
    {
        $this->nome         = $nome;
        $this->id           = $id;
        $this->id_user      = $id_user;
		$this->telefone     = $telefone;
		$this->funcao       = $funcao;
		$this->cpf          = $cpf;
        $this->categoria    = $categoria;
		$this->salario      = $salario;
    }
    function getNome()
    {
        return $this->nome;
    }
    
    function getId()
    {
        return $this->id;
    }
    
    function getId_User()
    {
        return $this->id_user;
    }
    
    function getTelefone()
    {
        return $this->telefone;
    }
    
    function getFuncao()
    {
        return $this->funcao;
    }
    
    function getCpf()
    {
        return $this->cpf;
    }
    
    function getCategoria()
    {
        return $this->categoria;
    }
	
	function getSalario()
    {
        return $this->salario;
    }
	
	   public function cad_empregado()
    {
        include_once("C:\wamp64\www\Projeto-Pes\conexao1.php");
        $con = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($con, "tcc") or die("Base dados não encontrada");
        // VERIFICA A LIGAÇÃO NÃO TEM ERROS
        if (mysqli_connect_errno()) {
            // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $query = "INSERT INTO empregados (id_user, nome, telefone, funcao, cpf, categoria_id, salario, created) 
		VALUES('$this->id_user', '$this->nome', '$this->telefone','$this->funcao','$this->cpf','$this->categoria', '$this->salario', NOW())";
 
        mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
        
        if (mysqli_affected_rows($con) != 0) {
            return 1;
        }
    }
	public function remove_empregado(){
        include_once("C:\wamp64\www\Projeto-Pes\conexao1.php");
        $con = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($con, "tcc") or die("Base dados não encontrada");
        // VERIFICA A LIGAÇÃO NÃO TEM ERROS
        if (mysqli_connect_errno()) {
            // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $query = "DELETE FROM agrotoxico WHERE id=$this->id";
        
        mysqli_query($con, $query) or die("Erro ao tentar remover");
        
        if (mysqli_affected_rows($con) != 0) {
            return 1;
        }
	}
	
}

?>
