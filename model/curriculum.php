<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class curriculum implements Crud{
    private $id;
    private $dataModificacao;
    private $dataCriacao;
    private $biCandidato;
    
    public function __construct($id, $biCandidato) {
        $this->id = $id;
        $this->dataModificacao = date('d-M-Y');
        $this->dataCriacao = date('d-M-Y');
        $this->biCandidato = $biCandidato;
    }

    public function getIdUl(){
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from curriculum");
        oci_execute($sql);
        $num= oci_fetch_all($sql, $a);
        return ($num+1);
    }
    
    public function getId() {
        return $this->id;
    }

    public function getDataModificacao() {
        return $this->dataModificacao;
    }

    public function getDataCriacao() {
        return $this->dataCriacao;
    }

    public function getBiCandidato() {
        return $this->biCandidato;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDataModificacao($dataModificacao) {
        $this->dataModificacao = $dataModificacao;
    }

    public function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    public function setBiCandidato($biCandidato) {
        $this->biCandidato = $biCandidato;
    }

        
    public function delete() {
        
    }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into curriculum values($this->id,'$this->dataModificacao','$this->dataCriacao','$this->biCandidato')";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa);        
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
