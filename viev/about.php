<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="about.css">
  <title>About</title>
</head>
<body>

  <?php
  require_once '../controler/controler.php';

  $controler = new controler($_GET);
  $new = $controler->get_new_buyId();
  $page = $controler->page;
  ?>

  <!-- Шапка -->
  <header>
    <div class="logo">
    <?php 
      require_once 'logo.php';
    ?>
    </div>
    <span>ГАЛАКТИЧЕСКИЙ<br>ВЕСТНИК</span>
  </header>
  
  <!-- Основная часть -->
  <main>
  <div class="container">
    <!-- хлебные крошки -->
    <nav class="bread_crumbs">
      <ul>
        <li><a href="../viev/index.php">Главная </a></li>
        <li class='dop'><?=$new['title']?></li>
      </ul>
    </nav>

    <!-- информация новости -->
    <h1><?=$new['title']?></h1>
    <div class="date"><?=date("d.m.Y", strtotime($new['date']))?></div>
    <div class='content'>
      <div class='info'>
      <div class="title"><?=$new['announce']?></div>
      <span><?=$new['content'];?></span>
      <a href="./?page=<?=$page?>" class="back">НАЗАД К НОВОСТЯМ</a>
      </div>

      <div>
      <img src="../images/<?=$new['image']?>">
      </div>
    </div>

  </div>

  <!-- Подвал -->
  <footer>&copy;2013—2412 "Галактический вестник"</footer>
  </main>
</body>
</html>