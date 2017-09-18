<?php
//MODEL
//class usuario (admin, usuario)

class Model_Agrotoxico
{
    private $nome;
    private $id;
    private $id_user;
    private $descricao;
    private $preco;
    private $quantidade;
    private $marca;
    private $categoria_id;
    
    public function __construct($nome, $id, $id_user, $descricao, $preco, $quantidade, $marca, $categoria_id)
    {
        $this->nome         = $nome;
        $this->id           = $id;
        $this->id_user      = $id_user;
        $this->descricao    = $descricao;
        $this->preco        = $preco;
        $this->quantidade   = $quantidade;
        $this->marca        = $marca;
        $this->categoria_id = $categoria_id;
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
    
    function getDescricao()
    {
        return $this->descricao;
    }
    
    function getPreco()
    {
        return $this->preco;
    }
    
    function getQuantidade()
    {
        return $this->quantidade;
    }
    
    function getMarca()
    {
        return $this->marca;
    }
    
    function getCategoria()
    {
        return $this->categoria_id;
    }
    
    public function cad_agro()
    {
        include_once("../conexao1.php");
        $con = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($con, "tcc") or die("Base dados não encontrada");
        // VERIFICA A LIGAÇÃO NÃO TEM ERROS
        if (mysqli_connect_errno()) {
            // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $query = "INSERT INTO agrotoxico  (id_user, nome, descricao, preco, quantidade, marca, created, categoria_id) 
VALUES('$this->id_user', '$this->nome', '$this->descricao','$this->preco', '$this->quantidade', '$this->marca', NOW(), '$this->categoria_id')";
        
        mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
        
        if (mysqli_affected_rows($con) != 0) {
            return 1;
        }
    }
    
    public function remove_agro()
    {
        include_once("../conexao1.php");
        
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

    public function edit_agro(){
    	include_once("../conexao1.php");
 
 $con=mysqli_connect("localhost","root","") or die ("Erro");
 mysqli_select_db($con,"tcc")or die ("Base dados não encontrada");
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 


$query = ("UPDATE agrotoxico set id_user='$this->id_user', nome ='$this->nome', descricao='$this->descricao', preco='$this->preco', quantidade='$this->$quantidade', marca='$this->marca', modified= NOW(), categoria_id='$this->categoria_id' WHERE id='$this->id'");
mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
 
 if(mysqli_affected_rows($con)!=0){
	return 1;
 }
    }
}
?>