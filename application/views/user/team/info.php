 <div class="container" style="">
<div class="row" style=" background:#fff;  overflow:hidden; _zoom:1; ">

    <div class="span3" style="width:257px; margin:0; position:relative; min-height:1000px; border-right:1px solid #1D1D1B; padding-bottom:10000px; margin-bottom:-10000px; ">
<div id="panel" style="margin:0 auto; width:200px; margin-top:20px;">
            <img src="/media/f/orig/<?= media::get($t->media_id) ?>" width="200px" class="border userpic"><br>
            <?=blocks::menu()?>
</div>
        </div>
    
   <div class="span7" style="width:722px; margin-top:20px; padding-bottom:10000px;
     margin-bottom:-10000px;">
        <div id="middle" >
            <a href="/team<?=$t->id?>" style="font-size:18px; font-weight:bold;" ><?= $t->name ?></a><br>
            <?= $t->city->name ?><br>
            Рейтинг: <?=$t->rating?> (1 место)<br>
            <?if(!$admin){?>
            <?if($member){?>
            Вы на 0 месте, ваш рейтинг: <?=$u->rating?> <br> 
            <a href="" class="del_team">Выйти из команды</a>
            <?}else{?>
            <a href="" class="add_team">Вступить в команду</a> 
            <?}}?>
            <hr style="width:70%;">
            <div class="about">
                <h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">О команде</h5>
                <?= $t->about ?>
            </div>
            <br>
            <!--end-->
            <h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">Управлящий страницей</h5>
            <div class="line"> </div><br>
            <div class="row">
                <ul class="thumbnails" style="margin-left:0; margin-right:0;">
                    <li style="width:120px; height:180px; padding:0px;">
                        <a  href="/id<?= $t->user_id ?>" style="text-decoration:none; text-align:center; font-size:11px;" class="thumbnail">
                            <img src="<?= media::user($t->user) ?>" ><?= $t->user->first_name ?> <?= $t->user->last_name ?><br>Рейтинг 134 
                        </a>
                    </li>
                </ul>
            </div>
            <h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">Участники <?=$memcount?></h5><?if($memcount){?><a href="all_team.html">Показать всех</a><?}?>
            <div class="line"> </div><br>
            <div class="row">
                <ul class="thumbnails" style="margin-left:0; margin-right:0;">
                    <? foreach ($t->users->order_by('rating', 'desc')->find_all() AS $v) { ?>
                        <li style="width:120px; height:180px; padding:0px;">
                            <a href="/id<?=$v->id?>"  style="text-decoration:none; text-align:center; font-size:11px;" class="thumbnail">
                                <img src="<?= media::user($v) ?>" ><?=$v->first_name?> <?=$v->last_name?><br>Рейтинг <?=$v->rating?> 
                            </a>
                        </li>
                    <? } ?>
                </ul>
            </div>
            <!--/бэйджики-->
            <!--Карты мира-->
            <h5 style="color:#4170b6; font-weight:600; size:18px; letter-spacing: 2px;">Мероприятия команды</h5><a href="event.html">Показать все</a>
            <div class="line"> </div><br>
            <div id="cards" style="width:540px; position:relative; bottom:5px; margin-bottom:20px;">
                <?foreach($t->tasks->find_all() AS $v){?>
              <div class="media">
         <hr>
  <a class="pull-left" href="userpage">
      <img src="/media/f/orig/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="64px" >
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="/tasks/<?= $v->id ?>"><?= $v->title ?></a></h4>
      <a href="">Task autor</a></br>
   <?= text::get($v->text, 100) ?><br>

    
 
  </div>
         
</div>
      <? } ?>
               
            </div><br><br><br>
            <!--Блог-->
            <h5 style="color:#4170b6; font-weight:bold; ">Блог команды</h5>
            <div class="line"> </div><br>
            <?= blocks::blogs($u, ($admin||$member), FALSE, $t) ?>
            <!--конец блога-->
        </div>

    </div>
    </div>
    </div>

<script>
    $('.add_team, .del_team').click(function(){
        set_team($(this));
        return false;
    })
    function set_team(t)
    {
        var id = <?=$t->id?>, act = t.hasClass('add_team');
        t.removeClass(act?'add_team':'del_team').addClass(act?'del_team':'add_team');
        t.hide().before('<i class="tmp">'+(act?'вступаем в':'покидаем')+' команду, подождите...</i>')
        j.g({g:'user/setteam',p:'id='+id+'&a='+(act?1:0)}, function(){
            t.show().text(act?'Покинуть команду':'Вступить в команду');
            $('.tmp').remove();
        })
    }
</script>