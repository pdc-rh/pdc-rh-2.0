<?php


class Perfil_de_oferta {
    
    private $area;
    private $pais;
    private $provincia;
    private $muncipio;
    private $bairro;
    private $perfil;
    private $regalias;
    private $habil;
    private $id;

    private $Out_Qual;
    private $Idade_Min;
    private $Idade_Max;
    private $dataC;
    private $dataCri;
    private $dataE;
    private $dataExp;
    
    
    public function __construct($area, $pais, $provincia, $muncipio, $bairro, $perfil, $regalias, $habil, $Out_Qual, $Idade_Min, $Idade_Max, $dataC, $dataCri, $dataE, $dataExp) {
        
        $this->id = $id;
        $this->area = $area;
        $this->pais = $pais;
        $this->provincia = $provincia;
        $this->muncipio = $muncipio;
        $this->bairro = $bairro;
        $this->perfil = $perfil;
        $this->regalias = $regalias;
        $this->habil = $habil;
        $this->Out_Qual = $Out_Qual;
        $this->Idade_Min = $Idade_Min;
        $this->Idade_Max = $Idade_Max;
        $this->dataC = $dataC;
        $this->dataCri = $dataCri;
        $this->dataE = $dataE;
        $this->dataExp = $dataExp;
    }
    
    public function getArea() {
        return $this->area;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getMuncipio() {
        return $this->muncipio;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getRegalias() {
        return $this->regalias;
    }

    public function getHabil() {
        return $this->habil;
    }

    public function getOut_Qual() {
        return $this->Out_Qual;
    }

    public function getIdade_Min() {
        return $this->Idade_Min;
    }

    public function getIdade_Max() {
        return $this->Idade_Max;
    }

    public function getDataC() {
        return $this->dataC;
    }

    public function getDataCri() {
        return $this->dataCri;
    }

    public function getDataE() {
        return $this->dataE;
    }

    public function getDataExp() {
        return $this->dataExp;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function setMuncipio($muncipio) {
        $this->muncipio = $muncipio;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    public function setRegalias($regalias) {
        $this->regalias = $regalias;
    }

    public function setHabil($habil) {
        $this->habil = $habil;
    }

    public function setOut_Qual($Out_Qual) {
        $this->Out_Qual = $Out_Qual;
    }

    public function setIdade_Min($Idade_Min) {
        $this->Idade_Min = $Idade_Min;
    }

    public function setIdade_Max($Idade_Max) {
        $this->Idade_Max = $Idade_Max;
    }

    public function setDataC($dataC) {
        $this->dataC = $dataC;
    }

    public function setDataCri($dataCri) {
        $this->dataCri = $dataCri;
    }

    public function setDataE($dataE) {
        $this->dataE = $dataE;
    }

    public function setDataExp($dataExp) {
        $this->dataExp = $dataExp;
    }

                                                  
    public function insert() {
        $conexao=new Conexao();
        $str="insert into PERFIL_DE_OFERTA values('$this->id','$this->area','$this->pais','$this->muncipio','$this->bairro','$this->perfil','$this->regalias','$this->habil','$this->Out_Qual','$this->Idade_Min','$this->Idade_Max','$this->dataCri','$this->dataExp')";
        $inserirPerf=oci_parse($conexao->connect(),$str);
        oci_execute($inserirPerf);
        
      
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
