<?php
require_once '../config/CRUD.php';
class curriculumHabilitacoes implements Crud {
    private $bi;
    private $id_Cur;
    
    public function __construct($bi, $id_Cur) {
        $this->bi = $bi;
        $this->id_Cur = $id_Cur;
    }

    public function delete() {
        
    }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into curriculum_hab_literarias values($this->id_Cur,'$this->bi')";
        $inserirPessoa=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPessoa);        
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
