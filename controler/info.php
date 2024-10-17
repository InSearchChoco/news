<?php 
  $last_info = $last_info->fetch_assoc();
?>

<div class="lastNew" style="background-image:url(../images/<?=$last_info['image']?>);">
  <h1><?=$last_info['title']?></h1>
  <?=$last_info['announce']?>
</div>