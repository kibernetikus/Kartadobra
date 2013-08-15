<?foreach($types AS $t){if($t->users->where('city_id', '=', $u->city_id)->count_all()){?>

<div style="width:720px; position:relative;">
<h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; "><?=$t->name?></h5>
<div class="line"> </div>

<?foreach($t->users->where('city_id', '=', $u->city_id)->find_all() as $v){?>

<div class="media">

  <a class="pull-left" href="#">
    <img src="/media/f/mini/<?=media::get($v->media_id, '_default/fond/'.$t->id.'.jpg')?>" class="img-polaroid" width="55px" >
  </a>
  <div class="media-body">
    <h5 class="media-heading"><a href="/id<?=$v->id?>"><?=$v->first_name?></a></h5>
   <?=$v->first_name?>
  </div>

</div>
 <?}?>
 




</div>
<?}}?>