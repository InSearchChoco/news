<div class="conteiner">
<?php 
  while($res = $result->fetch_assoc()){
?>
<form action='about.php' method='post' class="box">
    <input type="hidden" name='title' value='<?=$res['title']?>'>
    <input type="hidden" name='page' value='<?=$page?>'>
  <div class="info-box">
    <div class="data"><?=date("d.m.Y",strtotime($res['date']))?></div>
    <h3><?=$res['title']?></h3>
    <?=$res['announce']?>
  </div>
  <button class="about" type='submit'>ПОДРОБНЕЕ →</button>
  </form>
<?php 

}
?>
</div>
<div class="line">
  <?php 
  if($page > 1){
    $n = $page - 1;
    if($page > 2){?>
    <!-- <form action='../viev/index.php' method='post'>
    <input type="hidden" name="page" value='1'>
    <button <?php if($n == $page){?>class='check'<?php }?> type='submit'>1</button>
  </form> -->
  <a href="./" <?php if($n == $page){?>class='check'<?php }?>>1</a>
  <p>...</p>
  <?php
  if($page == $num_row){?>
    <!-- <form action='../viev/index.php' method='post'>
    <input type="hidden" name="page" value='<?=$page-2?>'>
    <button type='submit'><?=$page-2?></button>
  </form> -->
  <a href="./?page=<?=$page-2?>"><?=$page-2?></a>
  <?php
  }
  }
  }else{
    $n = 1;
  }
  for($i = 1; $n <= $num_row && $i <= 3; $i++ && $n++){
  ?>
  <?php if($n == $page){?><button class='check'><?=$n?>
  </button><?php }else{?><a href="./?page=<?=$n?>"><?=$n?></a><?php } ?>
  <!-- <form action='../viev/index.php' method='post'>
    <input type="hidden" name="page" value='<?=$n?>'>
    <button <?php if($n == $page){?>class='check'<?php }?> type='submit'><?=$n?></button>
  </form> -->
  <?php }
  if($page < $num_row){?>
  <!-- <form action='../viev/index.php' method="post">
    <input type="hidden" name="page" value='<?=$page+1?>'>
    <button type='submit' class="button_last">→</button>
  </form> -->
  <a class="button_last" href="./?page=<?=$page+1?>">→</a>
  <?php } ?>
</div>