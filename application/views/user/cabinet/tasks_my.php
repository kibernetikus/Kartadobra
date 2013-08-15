<style>
    #files img {margin:5px;}
</style>
<link rel="stylesheet" type="text/css" href="/media/js/jquery.autocomplete.css" />
   <script src="/media/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="/media/js/jquery.dropkick-1.0.0.js"></script>
<script src="/media/js/bootstrap-tooltip.js"></script>
   <script src="/media/js/application.js"></script>


<ul class="nav nav-tabs" style="margin-top:-20px;">
  <li class="active"><a href="#addtask" data-toggle="tab" id="addtsk">Добавить просьбу</a></li>
    <li ><a href="#user_tasks" data-toggle="tab">Ваши просьбы</a></li>
    <li><a href="#donetask" data-toggle="tab">Выполненные просьбы</a></li>
    

</ul>
<div id="myTabContent" class="tab-content">
  <div  class="tab-pane fade in active" id="addtask" style="width:720px;  margin-top:0px;">


       <h4>Добавление просьбы</h4><hr>

        <form class="form-horizontal" action="" id="task-form" data-content="#messages"  method="POST">
<div class="control-group">
<legend class="control-label">Заголовок просьбы</legend>
<div class="controls">
            <input type="text" id="title" autofocus="autofocus" placeholder="Введите заголовок задания" maxlength="50" style="width:360px;" data-toggle="tooltip" title="Опишите кратко суть просьбы" data-placement="right"><br><small>например: <span style="color:#3e6dab">Потерялась собака в районе парка Горького</span></small><br><br>
 </div>
</div>

<div class="control-group">
<legend class="control-label">Город</legend>
  <div class="controls">
            <input type="hidden" value="<?=$u->city_id?>" id="city_id"/>
            <input type="text" id="city_search" style="width:360px;"  value="<?= $u->city->name ?>"  data-toggle="tooltip" title="Измените, если требуется помощь в другом город" data-placement="right"><br>
  </div>
    </div>
<div class="control-group">
    <legend class="control-label">Период актуальности</legend>
     <div class="controls">
    <input type="text" value="10" style="width:30px; margin-left:-5px; margin-top:-5px;"max="2" data-toggle="tooltip" title="Укажите количество дней, в течении которых просьба будет актуальна" data-placement="right"> дней
     </div>
    </div><br>

<div class="control-group">
<legend class="control-label">Описание просьбы</legend>
   <div class="controls">
            <textarea style="width:360px; height:90px;"  id="text" placeholder="Опишите суть просьбы"></textarea> <br>

 <small>например: <span style="color:#3e6dab">Позавчера потерялась собака, порода хаски, цвет бело-черный, ошейник красный</span></small>
</div>
      </div><br><br>

 

            <?if($is_org){?><input type="checkbox" id="f_const" name="constant"/> постоянная просьба<br/><?}?>
 
        
            <a href="" id="ajaxupload" style="width:200px;height:20px;display:block;margin:10px 0 20px 0;"><i class="icon-plus"></i> Добавить фотографию</a>

            <div id="files" class="hide" style="margin-bottom:20px;"></div>
<legend>Укажите место на карте, если требуется</legend>
            <input id="geo" type="hidden"/>
 <div id="map_canvas" style="margin: 0; padding: 0;  width:500px; height:400px;margin-bottom:20px;" class=""></div>

            <input type="button" class="btn btn-success" id="add_task"  value="Опубликовать">
        </form>
    </div>
    <div id="user_tasks" style="width:720px;" class="tab-pane fade">




     <?if($tasks0->count()==0){?><p>У вас нет актуальных просьб</p><?}?>
                <? foreach ($tasks0 AS $v) { ?> 

<div class="media">
         <hr>
  <a class="pull-left h" href="/tasks/<?=$v->id?>">
      <img src="/media/f/small/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="65px" >
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a class="h" href="/tasks/<?=$v->id?>"><?= $v->title ?></a></h4>
 
  <?= text::get($v->text, 100) ?><br>
Просьба актуальна до 20.03.2013
    
  </div>
</div>
  <? } ?>
</div>


    <div  class="tab-pane fade" id="donetask" style="width:720px;">
     <?if($tasks1->count()==0){?><li>У вас нет выполненных просьб</li><?}?>
                <?foreach($tasks1 AS $v){?>
<div class="media">
         <hr>
  <a class="pull-left h" href="/tasks/<?=$v->id?>">
      <img src="/media/f/small/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="65px" >
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a class="h" href="/tasks/<?=$v->id?>"><?= $v->title ?></a></h4>
    
  <?= text::get($v->text, 100) ?><br>

      Выполнена <a href="#">Константином Константинопольским</a>
  </div>
</div>
  <? } ?>

    </div>

    

</div>
<script>
    j.js('/media/js/ajaxupload.js', false, function(){
        var t = $('#ajaxupload'), p = $('#files');
        $.ajax_upload(t, {
            action : '/a/user/task',
            name : 'myfile',
            onSubmit : function(file, ext) {
                t.hide().before('<i class="tmp">Идет загрузка файла...</i>')
            },
            onComplete : function(file, response) {
                p.show().append('<img src="/media/f/small/'+response+'"/>');
                t.show();
                $('.tmp').remove();
            }
        });
    });
    var geocoder = false;
    $('#addtsk').on('shown', function (e) {
        if(geocoder) return;
        var _round = Math.round;
        var m = function(number, decimals){
          if (arguments.length == 1) return _round(number);
          var multiplier = Math.pow(10, decimals);
          return _round(number * multiplier) / multiplier;
        }
        
        geocoder = new google.maps.Geocoder();
        var map = new google.maps.Map(document.getElementById("map_canvas"), {
            //center: geocoder,
            zoom: 11,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        centerMap('<?=$u->city->name?>');


        function centerMap(address) {
                geocoder.geocode( { 'address': address}, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                  } else {
                        console.log('Geocode was not successful for the following reason: ' + status);
                  }
                });
        }
	var marker = new google.maps.Marker({
		map: map,
		icon: "http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png"
	});
        
	google.maps.event.addListener(map, 'click', function(evnt) {
			$('#geo').val(m(evnt.latLng.lat(), 6) + ',' + m(evnt.latLng.lng(), 6));
			marker.setMap(map);
			marker.setPosition(evnt.latLng);
	});
    });
    
    $('#add_task').click(function(){
        var t = $(this), p = t.parents('#task-form');
        var ttl = p.find('#title').val(),
        ct = p.find('#city_id').val(),
        txt = p.find('#text').val(),
        mp = p.find('#geo').val(),
        con = p.find('#f_const').attr('checked')?1:0,
        img = '';
        $('#files img').each(function(i){
            var s = this.src, r = /\/([\d]+)\.jpg/
            s = r.exec(s);
            img += (i>0?';':'')+s[1];            
        });
        if(ttl==''||ct==''||txt=='') return alert('Не все данные указаны!');
        if(img=='') return alert('Загрузите хотя бы одну фотографию!');

        p.hide().before('<i class="tmp">Идет публикация, подождите...</i>')
        j.g({g:'user/addtask',p:'t='+encodeURIComponent(ttl)+'&c='+encodeURIComponent(ct)+'&txt='+encodeURIComponent(txt)+'&g='+mp+'&img='+img+'&const='+con}, function(dt){
            j.h('/tasks/'+dt.id);
            p.show().find('#title').val('');
            $('.tmp').remove();
            p.find('#text').val('');
            $('#files').html('').hide();
        })

    })
   j.js('/media/js/jquery.autocomplete.min.js', false, function(){
	$('#city_search').click(function(){
            $(this).select();
        }).autocomplete('/a/public/cities', {
		width: 320,
		max: 10,
                autoFill: true,
		scroll: true,
		scrollHeight: 300,
		dataType: "json",
		parse: function(data) {
                    return $.map(data, function(row) {
                        return {
                            data: row,
                            value: row.n,
                            result: row.n
                        }
                    });
		},
		formatItem: function(dt) {
			return dt.n+'<br/><span>'+dt.r+'</span>';
		}
	}).result(function(e, dt) {
            $('#city_id').val(dt.i);
	});
    })
</script>

