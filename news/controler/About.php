<?php $res = $bd->query("SELECT * FROM `news` WHERE `title` = '$title'")->fetch_assoc();
$page = $_POST['page'];
if(!isset($page)){
  $page = 1;
}
?>
<div class='row'>
<p><a href="../viev/index.php">Главная </a>/ </p><p class='dop'><?=$res['title']?></p>
</div>
<h1><?=$res['title']?></h1>
<div class="data"><?=date("d.m.Y",strtotime($res['date']))?></div>
<div class='content'>
<div class='left'>
<h2><?=$res['announce']?></h2>
<span><?=$res['content'];?></span>
<!-- <form action="../viev/index.php" method="get">
  <input type="hidden" name="page" value='<?=$page?>'>
  <button type='submit'>← НАЗАД К НОВОСТЯМ</button>
</form> -->
<a href="./?page=<?=$page?>" class="back">← НАЗАД К НОВОСТЯМ</a>
</div>
<div>
<img src="../images/<?=$res['image']?>">
</div>
</div>
<!-- <button onclick="document.location.href='../viev/index.php'">← НАЗАД К НОВОСТЯМ</button> -->