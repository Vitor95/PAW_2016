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
 * Description of utilizador
 *
 * @author samun
 */
class Utilizador {
      private $idUtilizador;
    private $nome;
    private $foto;
    private $contacto;
    private $email;
    private $perfil;
    private $username;
    private $password;
    
    function __construct($idUtilizador,$nome, $foto, $contacto, $email, $perfil, $username, $password) {
         $this->idUtilizador = $idUtilizador;
        $this->nome = $nome;
        $this->foto = $foto;
        $this->contacto = $contacto;
        $this->email = $email;
        $this->perfil = $perfil;
        $this->username = $username;
        $this->password = $password;
    }
    
    function getIdUtilizador() {
        return $this->idUtilizador;
    }

        function getNome() {
        return $this->nome;
    }

    function getFoto() {
        return $this->foto;
    }

    function getContacto() {
        return $this->contacto;
    }

    function getEmail() {
        return $this->email;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    function setIdUtilizador($idUtilizador) {
        $this->idUtilizador = $idUtilizador;
    }

       public function convertObjectToArray(){
        $data = array( 
                        'nome' => $this->getNome(), 
                        'foto' => $this->getFoto(),
                        'contacto' => $this->getContacto(),
                         'email' => $this->getEmail(),
                          'perfil' => $this->getPerfil(),
                       'username' => $this->getUsername(),
                        'password' => $this->getPassword());        
        
        return $data;
    }
    
    public static function convertArrayToObject(Array &$data){
        return self::createObject($data['studentID'], $data['studentName'], $data['courseID']);
    }    
    
    public static function createObject($nome,$foto,$contacto,$email,$perfil,$username,$password){
        $utilizador = new Utilizador();
        $utilizador->setNome($nome);
        $utilizador->setFoto($foto);
        $utilizador->setContacto($contacto);
        $utilizador->setEmail($email);
        $utilizador->setPerfil($perfil);
        $utilizador->setUsername($username);
        $utilizador->setPassword($password);
        
        return $utilizador;
    }
}
