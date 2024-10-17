<?php 
require_once '../config_bd.inc.php';

  $host = BD_HOST;
  $user = BD_USER;
  $password = BD_PASSWORD;
  $base = BD_BASE;
  $bd = new mysqli($host, $user, $password, $base);
    if($bd == false){
      echo 'Ошибка подключения';
    }
?>