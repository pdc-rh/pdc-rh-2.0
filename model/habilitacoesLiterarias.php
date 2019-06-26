<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class habilitacoesLiterarias implements Crud{
    private $id;
    private $dataTermino;
    private $instituicao;
    private $area;
    private $nivel;
    
    public function getIdUl(){
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from  habilitacao_literaria");
        oci_execute($sql);
        $num= oci_fetch_all($sql, $a);
        return $num;
    }
    
    public function setId($id) {
        $this->id = $id+1;
    }

        public function __construct($id,$dataTermino, $instituicao, $area, $nivel) {
        $this->id=$id;
        $this->dataTermino = $dataTermino;
        $this->instituicao = $instituicao;
        $this->area = $area;
        $this->nivel = $nivel;
    }
    public function getDataTermino() {
        return $this->dataTermino;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function getArea() {
        return $this->area;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setDataTermino($dataTermino) {
        $this->dataTermino = $dataTermino;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function delete() {
        
    }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into habilitacao_literaria values($this->id,'$this->dataTermino','$this->instituicao','$this->area','$this->nivel')";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa);
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
