<?php
require_once '../model/Pessoa.php';
require_once '../config/CRUD.php';
class Candidato  implements Crud{
    private $bi;
    private $id;
    private $palavraPasse;
    private $nacionalidade;
    private $estado;
    private $idLocal;
    
    public function __construct($bi, $id, $palavraPasse, $nacionalidade, $estado, $idLocal) {
        $this->bi = $bi;
        $this->id = $id;
        $this->palavraPasse = $palavraPasse;
        $this->nacionalidade = $nacionalidade;
        $this->estado = $estado;
        $this->idLocal = $idLocal;
    }

    public function getBi() {
        return $this->bi;
    }

    public function getId() {
        return $this->id;
    }

    public function getPalavraPasse() {
        return $this->palavraPasse;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getIdLocal() {
        return $this->idLocal;
    }

    public function setBi($bi) {
        $this->bi = $bi;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPalavraPasse($palavraPasse) {
        $this->palavraPasse = $palavraPasse;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setIdLocal($idLocal) {
        $this->idLocal = $idLocal;
    }

        
    public function delete() {
        
    }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into candidato values('$this->bi',1,'$this->palavraPasse','$this->nacionalidade','1',$this->idLocal)";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa);
    }

    public function select() {
        
    }

    public function update() {
        
    }
}
