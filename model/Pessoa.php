
<?php
require_once '../config/CRUD.php';
class Pessoa implements Crud{
    private $bi;
    private $nome;
    private $genero;
    private $nif;
    private $estadoCivil;
    private $numCartaCon;
    private $telefone;
    private $dtaNasc;
    private $idLocalMorada;
    private $tipo;
    
    public function __construct($bi, $nome, $genero, $nif, $estadoCivil, $numCartaCon, $telefone, $dtaNasc, $idLocalMorada, $tipo) {
        $this->bi = $bi;
        $this->nome = $nome;
        $this->genero = $genero;
        $this->nif = $nif;
        $this->estadoCivil = $estadoCivil;
        $this->numCartaCon = $numCartaCon;
        $this->telefone = $telefone;
        $this->dtaNasc = $dtaNasc;
        $this->idLocalMorada = $idLocalMorada;
        $this->tipo = $tipo;
    }

    public function getBi() {
        return $this->bi;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getNif() {
        return $this->nif;
    }

    public function getEstadoCivil() {
        return $this->estadoCivil;
    }

    public function getNumCartaCon() {
        return $this->numCartaCon;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getDtaNasc() {
        return $this->dtaNasc;
    }

    public function getIdLocalMorada() {
        return $this->idLocalMorada;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setBi($bi) {
        $this->bi = $bi;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setNif($nif) {
        $this->nif = $nif;
    }

    public function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    public function setNumCartaCon($numCartaCon) {
        $this->numCartaCon = $numCartaCon;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setDtaNasc($dtaNasc) {
        $this->dtaNasc = $dtaNasc;
    }

    public function setIdLocalMorada($idLocalMorada) {
        $this->idLocalMorada = $idLocalMorada;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

        
    
    public function delete() {
        
    }

    public function insert() {
        
    }

    public function select() {
        
    }

    public function update() {
        
    }

}
