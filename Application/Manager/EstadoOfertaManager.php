<?php
require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
    use Config as Conf;
    
require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once (Conf::getApplicationModelPath() . 'EstadoOferta.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoOfertaManager
 *
 * @author samun
 */
class EstadoOfertaManager extends MyDataAccessPDO {
    const SQL_TABLE_NAME = 'estadooferta';
    
    public function getEstadoByid($id){
        try{
            return $this->getRecords(self::SQL_TABLE_NAME, array('idoferta' => $id));
        }catch(Exception $e){
            throw $e;
        }
    }
    public function createEstado(EstadoOferta $obj){
        try{    
            $this->insert(self::SQL_TABLE_NAME, $obj->convertObjectToArray());
        }catch(Exception $e){
            throw $e;
        }            
    }
    
    public function updateEstado(EstadoOferta $obj){
        try{
            $this->update(self::SQL_TABLE_NAME, $obj->convertObjectToArray(), array('idoferta' => $obj->getIdoferta()));
        }catch(Exception $e){
            throw $e;
        }            
    }    

    public function deleteEstado(EstadoOferta $obj){
        try{
            $this->delete(self::SQL_TABLE_NAME, array('idoferta' => $obj->getIdoferta()));
        }catch(Exception $e){
            throw $e;
        }
    }
}
