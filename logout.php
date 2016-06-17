<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
session_destroy();
echo 'Terminou a sessão. <a href="index.php">Voltar</a>';
sleep(2);
header('location:index.php?success=1');