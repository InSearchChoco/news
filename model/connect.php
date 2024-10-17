<?php 
require_once '../config_bd.inc.php';

  $host = bd_host;
  $user = bd_user;
  $password = bd_password;
  $base = bd_base;
  $bd = new mysqli($host, $user, $password, $base);
    if($bd == false){
      echo 'Ошибка подключения';
    }
?>