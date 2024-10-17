<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="about.css">
  <title>About</title>
</head>
<body><?php
require_once '../model/connect.php';
?>
  <!-- Шапка -->
  <header>
    <div class="logo">
    <?php require_once 'logo.php';?>
    </div>
    <span>ГАЛАКТИЧЕСКИЙ<br>ВЕСТНИК</span>
  </header>
  
  <!-- Основная часть -->
  <main>
  <div class="container">
    <?php require_once '../controler/About.php';?>
  </div>

  <!-- Подвал -->
  <footer>&copy;2013—2412 "Галактический вестник"</footer>
  </main>
  <?php $bd->close();?>
</body>
</html>