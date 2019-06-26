<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class publicacoes implements Crud {
    private $id;
    private $dataPublicacao;
    private $titulo;
    
    public function getIdUl(){
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from publicacoes");
        oci_execute($sql);
        $num= oci_fetch_all($sql, $a);
        return $num;
    }
    
    public function __construct($id,$dataPublicacao, $titulo) {
        
        $this->id=$id;
        $this->dataPublicacao = $dataPublicacao;
        $this->titulo = $titulo;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

    public function setDataPublicacao($dataPublicacao) {
        $this->dataPublicacao = $dataPublicacao;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function delete(){
    } 
    public function insert(){
        $conexao=new Conexao();
        $str="insert into publicacoes values($this->id,'$this->dataPublicacao','$this->titulo')";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa); 
    }
    public function select(){
    }
    public function update(){
    }
}
