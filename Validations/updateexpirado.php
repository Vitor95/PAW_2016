<?php
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/OfertaTrabalhoManager.php';
require_once '../Application/Model/OfertasTrabalho.php';
require_once '../Application/Manager/ofertautilizadorManager.php';
require_once '../Application/Model/ofertautilizador.php';

$num=filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_SPECIAL_CHARS);
$estado=filter_input(INPUT_GET, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);


 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");

$sql = "UPDATE ofertastrabalho SET estado = '$estado' WHERE idoferta = '$num'";
mysql_query($sql);

header("location:../Candidatos.php?status=1");  
