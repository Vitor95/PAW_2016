<?php
require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
    use Config as Conf;
    
require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once (Conf::getApplicationModelPath() . 'ofertautilizador.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilizadorManager
 *
 * @author samun
 */
class ofertautilizadorManager extends MyDataAccessPDO {
    const SQL_TABLE_NAME = 'ofertautilizador';
  
    public function createofertautilizador(ofertautilizador $obj){
        try{    
            $this->insert(self::SQL_TABLE_NAME, $obj->convertObjectToArray());
        }catch(Exception $e){
            throw $e;
        }            
    }
    
    public function updateofertautilizador(ofertautilizador $obj){
        try{
            $this->update(self::SQL_TABLE_NAME, $obj->convertObjectToArray(), array('idOferta' => $obj->getIdOferta()));
        }catch(Exception $e){
            throw $e;
        }            
    }    

    public function deleteofertautilizador(ofertautilizador $obj){
        try{
            $this->delete(self::SQL_TABLE_NAME, array('idOferta' => $obj->getIdOferta()));
        }catch(Exception $e){
            throw $e;
        }
    }
}
