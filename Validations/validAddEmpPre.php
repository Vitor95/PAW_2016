<?php
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/UtilizadorManager.php';
require_once '../Application/Model/Utilizador.php';

$num=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$num1=filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_SPECIAL_CHARS);
$num2=filter_input(INPUT_POST, 'contacto', FILTER_SANITIZE_SPECIAL_CHARS);
$num3=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$num4=filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
$num5=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$num6=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$a=new Utilizador("", $num, $num1, $num2, $num3, $num4, $num5, $num6);
$w=new UtilizadorManager();

 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
//$query_select = "DELETE FROM `utilizador` WHERE `utilizador`.`idUtilizador` = '$num'";
$w->createUtilizador($a);
if($num4=="empregador"){
  header("location:../GerirEmpregadores.php");  
}else{
    header("location:../GerirPrestadores.php"); 
}
