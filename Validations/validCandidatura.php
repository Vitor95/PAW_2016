<?php
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/ofertautilizadorManager.php';
require_once '../Application/Model/ofertautilizador.php';

$num=filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_SPECIAL_CHARS);
$estado=filter_input(INPUT_GET, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
$idC=filter_input(INPUT_GET, 'idC', FILTER_SANITIZE_SPECIAL_CHARS);
$username=filter_input(INPUT_GET, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");

$sql = "UPDATE ofertautilizador SET estado = '$estado', idCandidato= '$idC', username = '$username' WHERE idOferta = '$num'";
mysql_query($sql);

header("location:../ofertasTrabPreServico.php?status=1");