<?php
require_once '../config/conexao.php';
class loginModel {
    private $telefone;
    private $senha;
       
    public function __construct($telefone, $senha) {
        $this->telefone = $telefone;
        $this->senha = $senha;
    }
    
    public function stringConsulta(){
        return "select * from candidato where bi_pessoa in (select bi from pessoa where telefone=$this->telefone) and palavra_passe = '$this->senha'";
    }
    
    public function stringConsultaGestor(){
        return "select * from gestor_recrutamento_selecao where id_gestor_area in (select id from gestor_area where bi_funcionario in (select bi_pessoa from funcionario where bi_pessoa in (select bi from pessoa where telefone=$this->telefone))) and senha='$this->senha'";
    }    
    private function CriarSecaoCand($num){
        $conexao= new Conexao();
        session_start();
        $secao = oci_parse($conexao->connect(),"select bi,nome from pessoa where telefone=$num");
        oci_execute($secao);
        $l=oci_fetch_array($secao, OCI_ASSOC);
        $_SESSION['login']=$l;
    }

    public function efectuarLogin($telefone, $senha){
        $aux = new loginModel($telefone, $senha);
        $conexao=new Conexao();
        $consulta = oci_parse($conexao->connect(), $aux->stringConsulta());
        oci_execute($consulta);
        $row = oci_fetch_array($consulta, OCI_ASSOC);
        if($row){
            $aux->CriarSecaoCand($telefone);
            header("location:../Interface/candidato/");
        }else{
            $consulta1 = oci_parse($conexao->connect(), $aux->stringConsultaGestor());
            oci_execute($consulta1);
            $row1 = oci_fetch_array($consulta1, OCI_ASSOC);            
            if($row1){
                 $aux->CriarSecaoCand($telefone);
                header("location:../Interface/admin/");
            }else{
                header("location:../index.php?estado=1");
            }
        }
    }

}
