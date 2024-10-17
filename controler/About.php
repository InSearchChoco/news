<?php 
// получение get параметров
$id = (int) $_GET['id'];
$page = $_GET['page'];

if(!isset($page)){
  $page = 1;
}
$id = mysqli_real_escape_string($bd, $id);

// запрос у базы определенной новости
$res = $bd->query("SELECT * FROM `news` WHERE `id` = $id")->fetch_assoc();
?>

<!-- хлебные крошки -->
<nav class="bread_crumbs">
  <ul>
    <li><a href="../viev/index.php">Главная </a></li>
    <li class='dop'><?=$res['title']?></li>
  </ul>
</nav>

<!-- информация новости -->
<h1><?=$res['title']?></h1>
<div class="date"><?=date("d.m.Y",strtotime($res['date']))?></div>
<div class='content'>
  <div class='info'>
  <div class="title"><?=$res['announce']?></div>
  <span><?=$res['content'];?></span>
  <a href="./?page=<?=$page?>" class="back">НАЗАД К НОВОСТЯМ</a>
  </div>

  <div>
  <img src="../images/<?=$res['image']?>">
  </div>
</div>