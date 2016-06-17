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
 * Description of Morada
 *
 * @author samun
 */
class Morada {
    private $idUtilizador;
    private $Rua;
    private $numero_porta;
    private $localidade;
    private $Codigo_postal;
    
    function __construct($idUtilizador, $Rua, $numero_porta, $localidade, $Codigo_postal) {
        $this->idUtilizador = $idUtilizador;
        $this->Rua = $Rua;
        $this->numero_porta = $numero_porta;
        $this->localidade = $localidade;
        $this->Codigo_postal = $Codigo_postal;
    }
    function getIdUtilizador() {
        return $this->idUtilizador;
    }

    function getRua() {
        return $this->Rua;
    }

    function getNumero_porta() {
        return $this->numero_porta;
    }

    function getLocalidade() {
        return $this->localidade;
    }

    function getCodigo_postal() {
        return $this->Codigo_postal;
    }

    function setIdUtilizador($idUtilizador) {
        $this->idUtilizador = $idUtilizador;
    }

    function setRua($Rua) {
        $this->Rua = $Rua;
    }

    function setNumero_porta($numero_porta) {
        $this->numero_porta = $numero_porta;
    }

    function setLocalidade($localidade) {
        $this->localidade = $localidade;
    }

    function setCodigo_postal($Codigo_postal) {
        $this->Codigo_postal = $Codigo_postal;
    }
public function convertObjectToArray(){
        $data = array( 
                        'idUtilizador' => $this->getIdUtilizador(), 
                        'Rua' => $this->getRua(),
                        'numero_porta' => $this->getNumero_porta(),
                         'localidade' => $this->getLocalidade(),
                          'Codigo_postal' => $this->getCodigo_postal());        
        
        return $data;
    }
    
    public static function convertArrayToObject(Array &$data){
        return self::createObject($data['studentID'], $data['studentName'], $data['courseID']);
    }    
    
    public static function createObject($idUtilizador,$Rua,$numero_porta,$localidade,$Codigo_postal){
        $morada = new Morada();
        $morada->setIdUtilizador($idUtilizador);
        $morada->setRua($Rua);
        $morada->setNumero_porta($numero_porta);
        $morada->setLocalidade($localidade);
        $morada->setCodigo_postal($Codigo_postal);
        
        return $morada;
    }
}
