<?php
require_once '../model/Funcionario.php';
require_once '../model/gestor_area.php';
require_once '../model/Pessoa.php';

$nome=$_POST['nome'];
$genero=$_POST['genero'];
$data=$_POST['data'];
$data1= date('d-M-Y',strtotime($data));
$bi=$_POST['bi'];
$estadoCivil=$_POST['estado_civil'];
$morada=$_POST['morada'];
$nif=$_POST['nif'];
$tipo=$_POST['tipo'];


$pai=$_POST['pai'];
$mae=$_POST['mae'];
$email=$_POST['email'];
$filial=$_POST['filial'];
$promocao=$_POST['promocao'];
$progressao=$_POST['progressao'];
$categoria=$_POST['categoria'];
$carta=$_POST['carta'];
$telefone=$_POST['telefone'];
$area=$_POST['area'];
$estado=1;

$pessoa=new Pessoa($bi, $nome, $genero, $nif, $estadoCivil, $carta, $telefone, $data1, $morada,$tipo);
$pessoa->insert();
$funcionarioR=new Funcionario($bi,$email, $mae,$pai,$filial,$promocao,$progressao,$categoria,$estado,$area);
$funcionarioR-> insert();
if($tipo=="Gestor de area"){
    $funcionarioG= new Gestor_area($bi,$tipo, $area,$filial);
    $funcionarioG->insert();

}           

header("location:../interface/admin/registar_funcionario.php");

