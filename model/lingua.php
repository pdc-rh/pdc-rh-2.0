<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class lingua  implements Crud {
    
    private $id;
    private $leitura;
    private $escrita;
    private $fala;
    private $idioma;

    
    public function setId($id) {
        $this->id = $id;
    }

        public function getIdUl(){
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from lingua");
        oci_execute($sql);
        $num= oci_fetch_all($sql, $a);
        return $num;
    }
    
    
    public function __construct($id,$leitura, $escrita, $fala, $idioma) {
      
        $this->id = $id;
        $this->leitura = $leitura;
        $this->escrita = $escrita;
        $this->fala = $fala;
        $this->idioma = $idioma;
    }
    
    public function getId() {
        return $this->id;
    }

        
    public function getLeitura() {
        return $this->leitura;
    }

    public function getEscrita() {
        return $this->escrita;
    }

    public function getFala() {
        return $this->fala;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function setLeitura($leitura) {
        $this->leitura = $leitura;
    }

    public function setEscrita($escrita) {
        $this->escrita = $escrita;
    }

    public function setFala($fala) {
        $this->fala = $fala;
    }

    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    
    
    public function delete() {
        
    }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into lingua values($this->id,'$this->leitura','$this->escrita','$this->fala','$this->idioma')";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa);         
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
