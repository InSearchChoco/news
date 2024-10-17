<div class="grid">

<!-- создание карточек новостей -->
<?php 
  while($res = $result->fetch_assoc()){
?>

  <article class="box">
    <div class="info-box">
      <p class="date"><?=date("d.m.Y",strtotime($res['date']))?></p>
      <h3><?=$res['title']?></h3>
      <?=$res['announce']?>
    </div>
    <a href="about.php?id=<?=$res['id']?>&page=<?=$page?>" class="about">ПОДРОБНЕЕ </a>
  </article>

<?php 
}
?>
</div>

<!-- навигация по странцам -->
<nav class="line">

  <?php 
  if($page > 1){
    $n = $page - 1;
    if($page > 2){
  ?>

    <a href="./" <?php if($n == $page){?>class='check'<?php }?>>1</a>
    <p>...</p>
    
    <?php
    if($page == $num_row){ 
    ?>

      <a href="./?page=<?=$page-2?>"><?=$page-2?></a>

    <?php
    }
  }
  }else{
    $n = 1;
  }
  for($i = 1; $n <= $num_row && $i <= 3; $i++ && $n++){
  ?>

  <?php if($n == $page){?>
    <a href="#" class='check'><?=$n?>
  </a>
  <?php }else{ ?>
    <a href="./?page=<?=$n?>"><?=$n?></a><?php } ?>
  <?php }
  if($page < $num_row){?>
  <a class="button_last" href="./?page=<?=$page+1?>"></a>
  <?php } ?>
</nav>