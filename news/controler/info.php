<?php $res_info = $res_info->fetch_assoc();?>
<div class="info" style="background-image:url(../images/<?=$res_info['image']?>);">
<h2><?=$res_info['title']?></h2>
<?=$res_info['announce']?>
</div>