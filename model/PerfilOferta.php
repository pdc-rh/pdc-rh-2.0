<?php


class PerfilOferta
{
    private $descricao;
    private $condicaoRegalias;
    private $preferencias;
    private $idadeMinima;
    private $idadeMazima;
    private $dataInicio;
    private $dataFim;
    private $area;
    private $local;
    private $prova;
    private $gestorReS;


    public function __construct($descricao, $condicaoRegalias, $preferencias, $idadeMinima, $idadeMazima, $dataInicio, $dataFim, $area, $local, $prova, $gestorReS)
    {
        $this->descricao = $descricao;
        $this->condicaoRegalias = $condicaoRegalias;
        $this->preferencias = $preferencias;
        $this->idadeMinima = $idadeMinima;
        $this->idadeMazima = $idadeMazima;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->area = $area;
        $this->local = $local;
        $this->prova = $prova;
        $this->gestorReS = $gestorReS;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }


    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }


    public function getCondicaoRegalias()
    {
        return $this->condicaoRegalias;
    }


    public function setCondicaoRegalias($condicaoRegalias): void
    {
        $this->condicaoRegalias = $condicaoRegalias;
    }

    public function getPreferencias()
    {
        return $this->preferencias;
    }

    public function setPreferencias($preferencias): void
    {
        $this->preferencias = $preferencias;
    }

    public function getIdadeMinima()
    {
        return $this->idadeMinima;
    }

    public function setIdadeMinima($idadeMinima): void
    {
        $this->idadeMinima = $idadeMinima;
    }

    public function getIdadeMazima()
    {
        return $this->idadeMazima;
    }

    public function setIdadeMazima($idadeMazima): void
    {
        $this->idadeMazima = $idadeMazima;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio): void
    {
        $this->dataInicio = $dataInicio;
    }


    public function getDataFim()
    {
        return $this->dataFim;
    }


    public function setDataFim($dataFim): void
    {
        $this->dataFim = $dataFim;
    }

    public function getArea()
    {
        return $this->area;
    }


    public function setArea($area): void
    {
        $this->area = $area;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local): void
    {
        $this->local = $local;
    }


    public function getProva()
    {
        return $this->prova;
    }


    public function setProva($prova): void
    {
        $this->prova = $prova;
    }

    public function getGestorReS()
    {
        return $this->gestorReS;
    }

    public function setGestorReS($gestorReS): void
    {
        $this->gestorReS = $gestorReS;
    }



}