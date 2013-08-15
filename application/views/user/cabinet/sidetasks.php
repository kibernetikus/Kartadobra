<style>
    #files img {margin:5px;}
</style>
<ul class="nav nav-tabs">
    <li class="active"><a href="#actual" data-toggle="tab">Актуальные просьбы</a></li>
    <li><a href="#donetask" data-toggle="tab">Выполненные просьбы</a></li>
</ul>   
<div id="myTabContent" class="tab-content">
    
    <div id="actual" style="width:722px;" class="tab-pane fade in active">
        

 <? if ($tasks->count() == 0) { ?><li>В вашем регионе нет просьб</li><? } ?>
                <? foreach ($tasks AS $v) { ?> 

<div class="media">
         <hr>
  <a class="pull-left" href="userpage">
      <img src="/media/f/small/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="65px" >
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="/tasks/<?= $v->id ?>"><?= $v->title ?></a></h4>
    <a href="">Task author</a></br>
  <?= text::get($v->text, 100) ?><br>
Просьба актуальна до 20.03.2013
    
  </div>
</div>
  <? } ?>
    </div>



    <div  class="tab-pane fade" id="donetask" style="width:722px;">
 <? if ($tasks2->count() == 0) { ?><li>Нет просьб</li><? } ?>
    <? foreach ($tasks2 AS $v) { ?> 
        <div class="media">
         <hr>
  <a class="pull-left" href="userpage">
      <img src="/media/f/orig/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="64px" >
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="/tasks/<?= $v->id ?>"><?= $v->title ?></a></h4>
      <a href="">Task autor</a></br>
   <?= text::get($v->text, 100) ?><br>

    
    Выполнена <a href="/tasks/<?= $v->id ?>">Константином Константинопольским</a>
  </div>
         
</div>
      <? } ?>






    </div>
</div>



<script>
  
</script>

