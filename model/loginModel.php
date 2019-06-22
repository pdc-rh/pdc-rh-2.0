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


    public function efectuarLogin($telefone, $senha){
        $aux = new loginModel($telefone, $senha);
        $conexao=new Conexao();
        $consulta = oci_parse($conexao->connect(), $aux->stringConsulta());
        oci_execute($consulta);
        $row = oci_fetch_array($consulta, OCI_ASSOC);
        if($row){
            header("location:../Interface/candidato/home.php");
        }else{
            echo("nao passou");
            exit();
            
        }
    }

}
