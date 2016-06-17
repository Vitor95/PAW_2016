<?php
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/UtilizadorManager.php';
require_once '../Application/Model/Utilizador.php';

$num=filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_SPECIAL_CHARS);
$a=new Utilizador($num, null, null, null, null, null, null, null);
$w=new UtilizadorManager();

 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
$query_select = "DELETE FROM `utilizador` WHERE `utilizador`.`idUtilizador` = '$num'";
$w->deleteUtilizador($a);

  echo "Record deleted successfully";
    header("location:../GerirEmpregadores.php");  

 