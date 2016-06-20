<?php
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/OfertaTrabalhoManager.php';
require_once '../Application/Model/OfertasTrabalho.php';
require_once '../Application/Manager/ofertautilizadorManager.php';
require_once '../Application/Model/ofertautilizador.php';

$num=filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_SPECIAL_CHARS);
$gerir=filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_SPECIAL_CHARS);
$oferta=new OfertasTrabalho($num, null, null, null, null, null, null, null, null, null,null,null);
$ofertas=new OfertaTrabalhoManager();
$a=new ofertautilizador($num, null,null,null,null);
$w=new ofertautilizadorManager();

 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
//$query_select = "DELETE FROM `utilizador` WHERE `utilizador`.`idUtilizador` = '$num'";
$w->deleteofertautilizador($a);
$ofertas->deleteOferta($oferta);


if($gerir==="GerirOfertas"){
     header("location:../GerirOfertas.php"); 
}else{
    header("location:../minhasOfertasEmp.php"); 
}