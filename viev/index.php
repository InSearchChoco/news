<!DOCTYPE html>
<?php 
  require_once '../controler/controler.php';

  $controler = new controler($_GET);
?>

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
    <?php
      $last_new = $controler->get_lastNew();
    ?>

    <div class="lastNew" style="background-image:url(../images/<?=$last_new['image']?>);">
    <h1><?=$last_new['title']?></h1>
    <?=$last_new['announce']?>
    </div>

    <div class="content"> 
       <!-- блок новостей -->
      <h2>Новости</h2>
      <div class="grid">

      <!-- создание карточек новостей -->
      <?php 
        $news = $controler->get_news(4);
        $page = $controler->page;
        foreach($news as $value){
      ?>

        <article class="box">
          <div class="info-box">
            <p class="date"><?=date("d.m.Y",strtotime($value['date']))?></p>
            <h3><?=$value['title']?></h3>
            <?=$value['announce']?>
          </div>
          <a href="about.php?id=<?=$value['id']?>&page=<?=$page?>" class="about">ПОДРОБНЕЕ </a>
        </article>

      <?php 
      }
      ?>
      </div>

      <!-- навигация по странцам -->
      <nav class="line">
      <?php
        $max_page = $controler->get_count_news();
        if($page > 1)
        {
          $num = $page - 1;
          if($page > 2)
          {
          ?>
            <a href="./">1</a>
          <?php
          
          if($page > 3)
            {
          ?>

            <p>...</p>
          
          <?php
            }
          }
        }

        if(!isset($num))
        {
          $num = $page;
        }
        for($i = 0; $num <= $max_page && $i < 3; $i++)
        {          
        ?>
        
          <a href="./?page=<?=$num?>" 
          <?php if($num == $page){?>
            class='check'<?php }?>
            >
            <?=$num?>
          </a>
        
        <?php
          $num++;
        }

        if($page < $max_page)
        {
        ?>
          <a class="button_last" href="./?page=<?=$page+1?>"></a>
        <?php
        }
      ?>
        
      </nav>

      <!-- Подвал -->
      <footer>&copy;2013—2412 "Галактический вестник"</footer>
     </div>
  </main>
</body>
</html>