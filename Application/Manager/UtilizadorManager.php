<?php
require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
    use Config as Conf;
    
require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once (Conf::getApplicationModelPath() . 'Utilizador.php');
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
class UtilizadorManager extends MyDataAccessPDO {
    const SQL_TABLE_NAME = 'utilizador';
    
    public function getUtilizadorByID($id){
        try{
            return $this->getRecords(self::SQL_TABLE_NAME, array('idUtilizador' => $id));
        }catch(Exception $e){
            throw $e;
        }
    }
    public function createUtilizador(Utilizador $obj){
        try{    
            $this->insert(self::SQL_TABLE_NAME, $obj->convertObjectToArray());
        }catch(Exception $e){
            throw $e;
        }            
    }
    
    public function updateUtilizador(Utilizador $obj){
        try{
            $this->update(self::SQL_TABLE_NAME, $obj->convertObjectToArray(), array('idUtilizador' => $obj->getIdUtilizador()));
        }catch(Exception $e){
            throw $e;
        }            
    }    

    public function deleteUtilizador(Utilizador $obj){
        try{
            $this->delete(self::SQL_TABLE_NAME, array('idUtilizador' => $obj->getIdUtilizador()));
        }catch(Exception $e){
            throw $e;
        }
    }
}
