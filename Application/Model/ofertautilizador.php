<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ofertautilizador
 *
 * @author samun
 */
class ofertautilizador {
    private $idOferta;
    private $utilizador;
    private $estado;
    private $idCandidato;
    private $username;
    
    function __construct($idOferta, $utilizador, $estado, $idCandidato, $username) {
        $this->idOferta = $idOferta;
        $this->utilizador = $utilizador;
        $this->estado = $estado;
        $this->idCandidato = $idCandidato;
        $this->username = $username;
    }
    function getEstado() {
        return $this->estado;
    }

    function getIdCandidato() {
        return $this->idCandidato;
    }

    function getUsername() {
        return $this->username;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setIdCandidato($idCandidato) {
        $this->idCandidato = $idCandidato;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    
    function getIdOferta() {
        return $this->idOferta;
    }

    function getUtilizador() {
        return $this->utilizador;
    }

    function setIdOferta($idOferta) {
        $this->idOferta = $idOferta;
    }

    function setUtilizador($utilizador) {
        $this->utilizador = $utilizador;
    }

 public function convertObjectToArray(){
        $data = array( 
                        'idOferta' => $this->getIdOferta(), 
                        'utilizador' => $this->getUtilizador(),
                        'estado' =>$this->getEstado(),
                        'idCandidato'=>$this->getIdCandidato(),
                        'username' =>$this->getUsername());        
        
        return $data;
    }
    
    public static function convertArrayToObject(Array &$data){
        return self::createObject($data['studentID'], $data['studentName'], $data['courseID']);
    }    
    
    public static function createObject($idOferta,$utilizador,$estado, $idCandidato, $username){
        $ofutilizador = new ofertautilizador();
        $ofutilizador->setIdOferta($idOferta);
        $ofutilizador->setUtilizador($utilizador);
        $ofutilizador->setEstado($estado);
        $ofutilizador->setIdCandidato($idCandidato);
        $ofutilizador->setUsername($username);
        
        return $ofutilizador;
    }
}
