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
    function __construct($idOferta, $utilizador) {
        $this->idOferta = $idOferta;
        $this->utilizador = $utilizador;
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
                        'utilizador' => $this->getUtilizador());        
        
        return $data;
    }
    
    public static function convertArrayToObject(Array &$data){
        return self::createObject($data['studentID'], $data['studentName'], $data['courseID']);
    }    
    
    public static function createObject($idOferta,$utilizador){
        $ofutilizador = new ofertautilizador();
        $ofutilizador->setIdOferta($idOferta);
        $ofutilizador->setUtilizador($utilizador);
        
        return $utilizador;
    }
}
