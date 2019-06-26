<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class outrasQualificacoes implements Crud {
    private $id;
    private $instituicao;
    private $descricao;
    private $anoObtencao;
    
    public function getIdUl(){
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from  outras_qualificacoes");
        oci_execute($sql);
        $num= oci_fetch_all($sql, $a);
        return $num;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function __construct($id,$instituicao, $descricao, $anoObtencao) {
       
        $this->id=$id;
        $this->instituicao = $instituicao;
        $this->descricao = $descricao;
        $this->anoObtencao = $anoObtencao;
    }
    
    public function getInstituicao() {
        return $this->instituicao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getAnoObtencao() {
        return $this->anoObtencao;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setAnoObtencao($anoObtencao) {
        $this->anoObtencao = $anoObtencao;
    }

    public function delete() {
        
    }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into outras_qualificacoes values($this->id,'$this->instituicao','$this->descricao',$this->anoObtencao)";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa); 
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
