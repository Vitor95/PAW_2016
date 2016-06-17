<?php
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/OfertaTrabalhoManager.php';
require_once '../Application/Model/OfertasTrabalho.php';

$num=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$num1=filter_input(INPUT_POST, 'descritivo', FILTER_SANITIZE_SPECIAL_CHARS);
$num2=filter_input(INPUT_POST, 'requisitos', FILTER_SANITIZE_SPECIAL_CHARS);
$num3=filter_input(INPUT_POST, 'valores', FILTER_SANITIZE_SPECIAL_CHARS);
$num4=filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_SPECIAL_CHARS);
$num5=filter_input(INPUT_POST, 'tipoHorario', FILTER_SANITIZE_SPECIAL_CHARS);
$num6=filter_input(INPUT_POST, 'categoria_geral', FILTER_SANITIZE_SPECIAL_CHARS);
$num7=filter_input(INPUT_POST, 'categoria_esp', FILTER_SANITIZE_SPECIAL_CHARS);
print_r($num5);
$a=new OfertasTrabalho("", $num, $num1, $num2, $num3, $num4, $num5, $num6, $num7);
$w=new OfertaTrabalhoManager();

 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
//$query_select = "DELETE FROM `utilizador` WHERE `utilizador`.`idUtilizador` = '$num'";
$w->createOferta($a); 

  header("location:../GerirOfertas.php");  



