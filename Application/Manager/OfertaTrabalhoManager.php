<?php
require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
    use Config as Conf;
    
require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once (Conf::getApplicationModelPath() . 'OfertasTrabalho.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OfertaTrabalhoManager
 *
 * @author samun
 */
class OfertaTrabalhoManager extends MyDataAccessPDO {
    const SQL_TABLE_NAME = 'OfertasTrabalho';
    
    public function getOfertasByid($id){
        try{
            return $this->getRecords(self::SQL_TABLE_NAME, array('idoferta' => $id));
        }catch(Exception $e){
            throw $e;
        }
    }
    public function createOferta(OfertasTrabalho $obj){
        try{    
            $this->insert(self::SQL_TABLE_NAME, $obj->convertObjectToArray());
        }catch(Exception $e){
            throw $e;
        }            
    }
    
    public function updateOferta(OfertasTrabalho $obj){
        try{
            $this->update(self::SQL_TABLE_NAME, $obj->convertObjectToArray(), array('idoferta' => $obj->getIdoferta()));
        }catch(Exception $e){
            throw $e;
        }            
    }    

    public function deleteOferta(OfertasTrabalho $obj){
        try{
            $this->delete(self::SQL_TABLE_NAME, array('idoferta' => $obj->getIdoferta()));
        }catch(Exception $e){
            throw $e;
        }
    }
}
