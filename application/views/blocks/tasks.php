<style>
.panel {
  padding: 3px;
  margin-bottom: 3px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

.panel-heading {
  padding: 7px 8px;
  margin: -15px -15px 15px;
  background-color: #f5f5f5;
  border-bottom: 1px solid #dddddd;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}

.col-lg-3 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: right;
}
</style>
<? if ($tasks->count() == 0): ?>
    В вашем регионе нет просьб
<? else: ?>
    <div class="col-lg-3">
        <div class="panel">
    	<div class="panel-headding">Просьбы пользователей</div>
	    <? foreach ($tasks AS $v) : ?> 

		<div class="media">
		    <hr>
		    <a  href="userpage">
			<img src="/media/f/orig/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="65px" >
		    </a>
		    <br/>
		    <div class="media-body">
			<h4 class="padding-heading"><a href="/tasks/<?= $v->id ?>"><?= $v->title ?></a></h4>
			<?= text::get($v->text, 50) ?><br>
		    </div>
		</div>
	    <? endforeach ?>
	<? endif; ?>
    </div>
</div>