<?php if(isset($_GET)){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }if($page < 1){
    $page = 1;
  }
  $limit = ($page - 1) * 4;
  // echo $limit;
  require_once '../model/connect.php';
  $res_info = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC");
  $result = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 4 OFFSET $limit");
  // $result = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC");
  $num_row = ceil($res_info->num_rows/4);
  if($page > $num_row){
    header('location: ../viev/index.php');
  }
?>