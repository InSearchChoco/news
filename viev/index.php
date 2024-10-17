<!DOCTYPE html>
<?php require_once '../controler/head.php';?>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style.css">
  <title>News</title>
</head>
<body>

  <!-- Шапка -->
  <header>
    <div class="logo">
    <?php require_once 'logo.php';?>
    </div>
    <span>ГАЛАКТИЧЕСКИЙ<br>ВЕСТНИК</span>
  </header>

  <!-- Основной блок -->
  <main>
    <!-- Первая новость -->
    <?php require_once '../controler/info.php'; ?>

    <div class="content"> 
       <!-- блок новостей -->
      <h2>Новости</h2>
        <?php require_once '../controler/content.php'; ?>

      <!-- Подвал -->
      <footer>&copy;2013—2412 "Галактический вестник"</footer>
     </div>
  </main>
  <?php $bd->close();?>
</body>
</html>