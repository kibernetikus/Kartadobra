<style>
    #files img {margin:5px;}
</style>


    
    <div id="actual" style="width:100%;">
        

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



   











<script>
  
</script>

