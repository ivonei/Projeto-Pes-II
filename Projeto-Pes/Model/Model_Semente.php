<?php
//MODEL
//class usuario (admin, usuario)

class Model_Semente
{
    private $nome;
    private $id;
    private $id_user;
    private $descricao;
    private $tag;
    private $preco;
    private $quantidade;
    private $marca;
    private $categoria_id;
    
    public function __construct($nome, $id, $id_user, $descricao, $tag, $preco, $quantidade, $marca, $categoria_id)
    {
        $this->nome         = $nome;
        $this->id           = $id;
        $this->id_user      = $id_user;
        $this->descricao    = $descricao;
        $this->tag          = $tag;
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
    
    function getTag()
    {
        return $this->tag;
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
    
    public function cad_sementes()
    {
        include_once("../conexao1.php");
        $con = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($con, "tcc") or die("Base dados não encontrada");
        // VERIFICA A LIGAÇÃO NÃO TEM ERROS
        if (mysqli_connect_errno()) {
            // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $query = "INSERT INTO sementes  (id_user, nome, descricao, tag, preco, quantidade, marca, created, categoria_id) 
VALUES('$this->id_user', '$this->nome', '$this->descricao','$this->tag','$this->preco', '$this->quantidade', '$this->marca', NOW(), '$this->categoria_id')";
        
        mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
        
        if (mysqli_affected_rows($con) != 0) {
            return 1;
        }
    }
    
    public function remove_sementes()
    {
        include_once("../conexao1.php");
        
        $con = mysqli_connect("localhost", "root", "") or die("Erro");
        mysqli_select_db($con, "tcc") or die("Base dados não encontrada");
        // VERIFICA A LIGAÇÃO NÃO TEM ERROS
        if (mysqli_connect_errno()) {
            // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $query = "DELETE FROM sementes WHERE id=$this->id";
        
        mysqli_query($con, $query) or die("Erro ao tentar remover");
        
        if (mysqli_affected_rows($con) != 0) {
            return 1;
        }
    }

    public function edit_sementes(){
    	include_once("../conexao1.php");
 
 $con=mysqli_connect("localhost","root","") or die ("Erro");
 mysqli_select_db($con,"tcc")or die ("Base dados não encontrada");
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 


$query = ("UPDATE sementes set id_user='$this->id_user', nome ='$this->nome', descricao='$this->descricao', tag ='$this->tag', preco='$this->preco', quantidade='$this->$quantidade', marca='$this->marca', modified= NOW(), categoria_id='$this->categoria_id' WHERE id='$this->id'");
mysqli_query($con, $query) or die("Erro ao tentar cadastrar registro");
 
 if(mysqli_affected_rows($con)!=0){
	return 1;
 }
    }
}
?>