<?php
require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
use Config as Conf;    

require_once (Conf::getApplicationUtilsPath() . 'Validations.php');
use Validations as MyValidations;
/*
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estado Oferta
 *
 * @author samun
 */
class EstadoOferta {
    private $idoferta;
    private $estado_oferta;
    
    function __construct($idoferta, $estado_oferta) {
        $this->idoferta = $idoferta;
        $this->estado_oferta = $estado_oferta;
    }
    function getIdoferta() {
        return $this->idoferta;
    }

    function getEstado_oferta() {
        return $this->estado_oferta;
    }

    function setIdoferta($idoferta) {
        $this->idoferta = $idoferta;
    }

    function setEstado_oferta($estado_oferta) {
        $this->estado_oferta = $estado_oferta;
    }

    public function convertObjectToArray(){
        $data = array( 
                        'idoferta' => $this->getIdoferta(),
                          'estado_oferta' => $this->getEstado_oferta());        
        
        return $data;
    }
    
    public static function convertArrayToObject(Array &$data){
        return self::createObject($data['studentID'], $data['studentName'], $data['courseID']);
    }    
    
    public static function createObject($idoferta,$estado_oferta){
        $estado = new EstadoOferta();
        $estado->setIdoferta($idoferta);
        $estado->setEstado_oferta($estado_oferta);
        
        return $estado;
    }
}
