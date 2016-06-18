<?php
require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
use Config as Conf;    

require_once (Conf::getApplicationUtilsPath() . 'Validations.php');
use Validations as MyValidations;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OfertasTrabalho
 *
 * @author samun
 */
class OfertasTrabalho {
    private $idoferta;
    private $titulo;
    private $descritivo;
    private $requisitos;
    private $valores_servicos;
    private $periodo_disponivel;
    private $TipoHorario;
    private $categoria_geral;
    private $categoria_especifica;
    private $estado;
    
    function __construct($idoferta, $titulo, $descritivo, $requisitos, $valores_servicos, $periodo_disponivel, $TipoHorario, $categoria_geral, $categoria_especifica,$estado) {
        $this->idoferta = $idoferta;
        $this->titulo = $titulo;
        $this->descritivo = $descritivo;
        $this->requisitos = $requisitos;
        $this->valores_servicos = $valores_servicos;
        $this->periodo_disponivel = $periodo_disponivel;
        $this->TipoHorario = $TipoHorario;
        $this->categoria_geral = $categoria_geral;
        $this->categoria_especifica = $categoria_especifica;
        $this->estado = $estado;
    }
    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

        function getIdoferta() {
        return $this->idoferta;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescritivo() {
        return $this->descritivo;
    }

    function getRequisitos() {
        return $this->requisitos;
    }

    function getValores_servicos() {
        return $this->valores_servicos;
    }

    function getPeriodo_disponivel() {
        return $this->periodo_disponivel;
    }

    function getTipoHorario() {
        return $this->TipoHorario;
    }

    function getCategoria_geral() {
        return $this->categoria_geral;
    }

    function getCategoria_especifica() {
        return $this->categoria_especifica;
    }

    function setIdoferta($idoferta) {
        $this->idoferta = $idoferta;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescritivo($descritivo) {
        $this->descritivo = $descritivo;
    }

    function setRequisitos($requisitos) {
        $this->requisitos = $requisitos;
    }

    function setValores_servicos($valores_servicos) {
        $this->valores_servicos = $valores_servicos;
    }

    function setPeriodo_disponivel($periodo_disponivel) {
        $this->periodo_disponivel = $periodo_disponivel;
    }

    function setTipoHorario($TipoHorario) {
        $this->TipoHorario = $TipoHorario;
    }

    function setCategoria_geral($categoria_geral) {
        $this->categoria_geral = $categoria_geral;
    }

    function setCategoria_especifica($categoria_especifica) {
        $this->categoria_especifica = $categoria_especifica;
    }

public function convertObjectToArray(){
        $data = array( 
                        'idoferta' => $this->getIdoferta(),
                          'titulo' => $this->getTitulo(),
                        'descritivo' => $this->getDescritivo(),
                          'requisitos' => $this->getRequisitos(),
                        'valores_servicos' => $this->getValores_servicos(),
                          'periodo_disponivel' => $this->getPeriodo_disponivel(),
                        'TipoHorario' => $this->getTipoHorario(),
                          'categoria_geral' => $this->getCategoria_geral(),
                        'categoria_especifica' => $this->getCategoria_especifica(),
                        'estado' => $this->getEstado());        
        
        return $data;
    }
    
    public static function convertArrayToObject(Array &$data){
        return self::createObject($data['studentID'], $data['studentName'], $data['courseID']);
    }    
    
    public static function createObject($idoferta,$titulo,$descritivo,$requisitos,$valores_servicos,$periodo_disponivel,$TipoHorario,$categoria_geral,$categoria_especifica,$estado){
        $ofertas = new OfertasTrabalho();
        $ofertas->setIdoferta($idoferta);
        $ofertas->setTitulo($titulo);
        $ofertas->setDescritivo($descritivo);
        $ofertas->setRequisitos($requisitos);
        $ofertas->setValores_servicos($valores_servicos);
        $ofertas->setPeriodo_disponivel($periodo_disponivel);
        $ofertas->setTipoHorario($TipoHorario);
        $ofertas->setCategoria_geral($categoria_geral);
        $ofertas->setCategoria_especifica($categoria_especifica);
        $ofertas->setEstado($estado);
        
        return $ofertas;
    }
}
