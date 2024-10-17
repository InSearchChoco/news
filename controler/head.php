<?php 
// получение и проверка get запроса
  if(isset($_GET)){
    $page = $_GET['page'];
    if($page < 1){
      $page = 1;
    }
  }else{
    $page = 1;
  }
  $limit = (int)($page - 1) * 4;
  
  // Подключение к базе и запрос и данных
  require_once '../model/connect.php';
  
  // Получение новостей и количества новостей
  $limit = mysqli_real_escape_string($bd, $limit);
  $last_info = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1");
  $result = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 4 OFFSET $limit");
  $count = mysqli_query($bd, "SELECT COUNT(*) FROM `news`")->fetch_assoc()['COUNT(*)'];
  $num_row = ceil($count/4);
  
  // Если запрашиваемая страница больше существующих, то загрузится первая
  if($page > $num_row){
    header('location: ../viev/index.php');
  }
?>