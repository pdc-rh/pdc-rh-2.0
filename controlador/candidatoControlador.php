<?php
require_once '../model/Candidato.php';
require_once '../model/Pessoa.php';
$nome=$_POST['nome'];
$genero=$_POST['genero'];
$data=$_POST['data'];
$data1= date('d-M-Y',strtotime($data));
$bi=$_POST['bi'];
$local=$_POST['local'];
$estadoCivil=$_POST['estadoCivil'];
$morada=$_POST['morada'];
$nif=$_POST['nif'];

$carta=$_POST['carta'];
$telefone=$_POST['telefone'];
$nacionalidade=$_POST['nacionalidade'];
$telefone=$_POST['telefone'];
$senha=$_POST['senha'];

$pessoa=new Pessoa($bi, $nome, $genero, $nif, $estadoCivil, $carta, $telefone, $data1, $local, 'Candidato');
$pessoa->insert();
$candidato=new Candidato($bi, $id, $senha, $nacionalidade, 1, $morada);
$candidato= insert();