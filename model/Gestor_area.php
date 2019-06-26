<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';
class Gestor_area {
    private $id;
    private $id_area;
    private $bi_pessoa;

    private $tipo;
    private $id_filial;
    
    public function __construct($bi_pessoa,$tipo, $id_area,$id_filial) {
        $conexao=new conexao();
        $sql= oci_parse($conexao->connect(),"select * from gestor_area");
        oci_execute($sql);
        $id= oci_fetch_all($sql, $a);
        $this->id = $id+1;
        $this->bi_pessoa=$bi_pessoa;
        $this->tipo=$tipo;
        $this->id_area = $id_area;
        $this->id_filial=$id_filial;
        
    }
    public function getId() {
        return $this->id;
    }

    public function getId_area() {
        return $this->id_area;
    }

    public function getBi_pessoa() {
        return $this->bi_pessoa;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getId_filial() {
        return $this->id_filial;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_area($id_area) {
        $this->id_area = $id_area;
    }

    public function setBi_pessoa($bi_pessoa) {
        $this->bi_pessoa = $bi_pessoa;
    }


    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setId_filial($id_filial) {
        $this->id_filial = $id_filial;
    }


    public function insert() {
        $conexao=new Conexao();
        $str="insert into gestor_area values('$this->id','$this->bi_pessoa','$this->tipo','$this->id_area','$this->id_filial')";
        $inserirGestorArea=oci_parse($conexao->connect(),$str);
        oci_execute($inserirGestorArea);        
      
    }

    public function select() {
        
    }

    public function update() {
        
    }

    
    
}
