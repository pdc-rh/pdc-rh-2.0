<?php
require_once '../config/CRUD.php';
require_once '../config/conexao.php';

class funcionario {
    
    private $bi_pessoa;
    private $email;
    private $nome_da_mae;
    private $nome_do_pai;
    private $id_filial;
    private $id_promocao;
    private $id_progressao;
    private $categoria;
    private $estado;
    private $area;
       
    public function __construct($bi_pessoa, $email, $nome_da_mae, $nome_do_pai, $id_filial, $id_promocao, $id_progressao, $categoria, $estado,$area) {
        $this->bi_pessoa = $bi_pessoa;
        $this->email = $email;
        $this->nome_da_mae = $nome_da_mae;
        $this->nome_do_pai = $nome_do_pai;
        $this->id_filial = $id_filial;
        $this->id_promocao = $id_promocao;
        $this->id_progressao = $id_progressao;
        $this->categoria = $categoria;
        $this->estado = $estado;
        $this->area = $area;
    }

    public function getBi_pessoa() {
        return $this->bi_pessoa;
    }

    public function setBi_pessoa($bi_pessoa) {
        $this->bi_pessoa = $bi_pessoa;
    }

          
      public function getEmail() {
          return $this->email;
      }

      public function getNome_da_mae() {
          return $this->nome_da_mae;
      }

      public function getNome_do_pai() {
          return $this->nome_do_pai;
      }

      public function getId_filial() {
          return $this->id_filial;
      }

      public function getId_promocao() {
          return $this->id_promocao;
      }

      public function getId_progressao() {
          return $this->id_progressao;
      }

      public function getCategoria() {
          return $this->categoria;
      }

      public function getEstado() {
          return $this->estado;
      }

      public function setEmail($email) {
          $this->email = $email;
      }

      public function setNome_da_mae($nome_da_mae) {
          $this->nome_da_mae = $nome_da_mae;
      }

      public function setNome_do_pai($nome_do_pai) {
          $this->nome_do_pai = $nome_do_pai;
      }

      public function setId_filial($id_filial) {
          $this->id_filial = $id_filial;
      }

      public function setId_promocao($id_promocao) {
          $this->id_promocao = $id_promocao;
      }

      public function setId_progressao($id_progressao) {
          $this->id_progressao = $id_progressao;
      }

      public function setCategoria($categoria) {
          $this->categoria = $categoria;
      }

      public function setEstado($estado) {
          $this->estado = $estado;
      }

    public function insert() {
        $conexao=new Conexao();
        $str="insert into funcionario values('$this->bi_pessoa','$this->email','$this->nome_da_mae','$this->nome_do_pai','$this->id_filial','$this->id_promocao',$this->id_progressao,'$this->categoria','$this->estado','$this->area')";
        $inserirFuncionario=oci_parse($conexao->connect(),$str);
        oci_execute($inserirFuncionario);
        
      
    }

    public function select() {
        
    }

    public function update() {
        
    }


}
