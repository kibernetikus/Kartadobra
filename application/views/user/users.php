<div style="position:relative;display:inline; width:460px;" >
<h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">Пользователи (<?=$u->region->name?>)</h5>
<div class="line"> </div>
<?foreach($users AS $v){?>
<div class="media">
  <a class="pull-left" href="userpage">
      <img src="<?=media::user($v)?>" class="img-polaroid" width="64px" >
  </a>
  <div class="media-body">
    <h5 class="media-heading"><a href="/id<?=$v->id?>"><?=$v->first_name?> <?=$v->last_name?></a></h5>
   <?=$v->desc?>
  </div>
</div>
<?}?>

   </div><br>