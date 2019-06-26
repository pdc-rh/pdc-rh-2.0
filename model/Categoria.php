

 <?php
        require_once '../config/CRUD.php';
        require_once '../config/conexao.php';
        class Categoria implements Crud{
        	private  $categoria;
        	private $id=1;
            private $id_avaliacao=0;
        
       



        function __construct($categoria, $id,$id_avaliacao) {
            $this->categoria = $categoria;
            $this->id = $id;
            $this->id_avaliacao=$id_avaliacao;
        }

        	
        }        function getNome() {
            return $this->nome;
        }

        function getId() {
            return $this->id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setId($id) {
            $this->id = $id;
        }
        
         function setId_avaliacao($id_avaliacao) {
            $this->id_avaliacao = $id_avaliacao;
        }

        function getId_avaliacao() {
            return $this->id_avaliacao;
        }



        
        public function delete(){
        
            
        }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into categoria values('$this->id','$this->categoria','$this->id_avaliacao')";
        $inserirCategoria=oci_parse($conexao->connect(),$str);
        oci_execute($inserirCategoria);
      
    }

    public function select() {
        
    }

    public function update() {
        
    }
        
 ?>
  
