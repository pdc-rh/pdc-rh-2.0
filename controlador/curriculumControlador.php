<?php
require_once '../model/curriculumHabilitacoes.php';
require_once '../model/experienciasTrabalho.php';
require_once '../model/habilitacoesLiterarias.php';
require_once '../model/lingua.php';
require_once '../model/outrasQualificacoes.php';
require_once '../model/publicacoes.php';
require_once '../model/curriculum.php';



session_start();
$bi=$_SESSION['login']['BI'];

$idCurr=0;
$curriculum=new curriculum($idCurr, $bi);
$idCurr=$curriculum->getIdUl();
$curriculum->setId($idCurr);
$curriculum->insert();


$instituicao=$_POST['instituicao'];
$area=$_POST['area'];
$nivel=$_POST['nivel'];
$dataTermin=$_POST['dataTermino'];
$dataTermino=date('d-M-Y',strtotime($dataTermin));



//experiencia profissional
$instituicaoExp=$_POST['instituicaoExp'];
$funcao=$_POST['funcao'];
$dataTerminoVincul=$_POST['dataTerminoVinculo'];
$dataTerminoVinculo=date('d-M-Y',strtotime($dataTerminoVincul));

//Outras Qualificações
$instituicaoQual=$_POST['instituicaoQual'];
$anoObtencao=$_POST['anoObtencao'];
$descricaoQualificacoes=$_POST['descricaoQualificacoes'];

//Publicações
$titulo=$_POST['titulo'];
$dataPublicaca=$_POST['dataPublicacao'];

$dataPublicacao=date('d-M-Y',strtotime($dataPublicaca));


//linguas
$idioma1=$_POST['idioma1'];
$nivelFala1=$_POST['nivelFala1'];
$nivelEscrita1=$_POST['nivelEscrita1'];
$nivelLeitura1=$_POST['nivelLeitura1'];

$idioma2=$_POST['idioma2'];
$nivelFala2=$_POST['nivelFala2'];
$nivelEscrita2=$_POST['nivelEscrita2'];
$nivelLeitura2=$_POST['nivelLeitura2'];

$idioma3=$_POST['idioma3'];
$nivelFala3=$_POST['nivelFala3'];
$nivelEscrita3=$_POST['nivelEscrita3'];
$nivelLeitura3=$_POST['nivelLeitura3'];


$idexp=0;
$experiencias=new experienciasTrabalho($idexp, $instituicaoExp, $dataTerminoVinculo, $funcao);
$idexp=$experiencias->getIdUl();
$experiencias->setId($idexp+1);
$experiencias->insert();



$idHab=0;
$experiencias=new habilitacoesLiterarias($idHab,$dataTermino, $instituicao, $area, $nivel);
$idHab=$experiencias->getIdUl();
$experiencias->setId($idHab+1);
$experiencias->insert();

$a=new curriculumHabilitacoes($idHab, $idCurr);//habilitacoes
$a->insert();

$idOut=0;
$experiencias=new outrasQualificacoes($idOut, $instituicao, $descricaoQualificacoes, $anoObtencao);
$idOut=$experiencias->getIdUl();
$experiencias->setId($idOut+1);
$experiencias->insert();

$idPub=0;
$experiencias=new publicacoes($idPub, $dataPublicacao, $titulo);
$idPub=$experiencias->getIdUl();
$experiencias->setId($idPub+1);
$experiencias->insert();


$idL=0;
$experiencias=new lingua($idL,$nivelLeitura1, $nivelEscrita1, $nivelFala1, $idioma1);
$idL=$experiencias->getIdUl();
$experiencias->setId($idL+1);
$experiencias->insert();

$idL=$experiencias->getId()+1;
$experiencias=new lingua($idL,$nivelLeitura2, $nivelEscrita2, $nivelFala2, $idioma2);
$experiencias->setId($idL);
$experiencias->insert();

$idL=$experiencias->getId()+1;
$experiencias=new lingua($idL,$nivelLeitura3, $nivelEscrita3, $nivelFala3, $idioma3);
$experiencias->setId($idL);
$experiencias->insert();

?>

