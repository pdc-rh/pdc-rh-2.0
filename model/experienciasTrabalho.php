<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class experienciasTrabalho  implements Crud {
    private $id;
    private $instituicao ;
    private $dataFimVinculo ;
    private $fucao;
    
    public function getIdUl(){
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from experiencia_de_trabalho");
        oci_execute($sql);
        $num= oci_fetch_all($sql, $a);
        return $num;
    }    
    
    public function __construct($id, $instituicao, $dataFimVinculo, $fucao) {
        $this->id = $id;
        $this->instituicao = $instituicao;
        $this->dataFimVinculo = $dataFimVinculo;
        $this->fucao = $fucao;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function getDataFimVinculo() {
        return $this->dataFimVinculo;
    }

    public function getFucao() {
        return $this->fucao;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    public function setDataFimVinculo($dataFimVinculo) {
        $this->dataFimVinculo = $dataFimVinculo;
    }

    public function setFucao($fucao) {
        $this->fucao = $fucao;
    }

    
    public function delete() {
        
    }

    public function insert() {
        
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
