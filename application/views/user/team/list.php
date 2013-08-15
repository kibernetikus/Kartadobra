<h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">Сообщества (<?=$u->region->name?>)</h5>

<div class="line"> </div><br>
<?foreach($teams AS $v){?>
<div class="team" id="id<?=$v->id?>">
    <hr>
<div class="media">
  <a class="pull-left" href="userpage">
      <img src="/media/f/mini/<?=media::get($v->media_id)?>" class="img-polaroid" width="64px" >
  </a>
  <div class="media-body">
    <h5 class="media-heading"><a href="/team<?=$v->id?>"><?=$v->name?></a></h5>
    Рейтинг: <?=$v->rating?><br>
    <?=$v->about?>
  </div> 
</div>
<?if($v->user_id==$u->id){?>
    <span>Моя команда</span>
<?}elseif($u->team_id==$v->id){?>
    <a href="" class="del_team">Покинуть команду</a>
<?}else{?>
    <a href="" class="add_team">Вступить в команду</a>
<?}?>

</div>
<?}?>
<div class="team">
           <hr>
<div class="media">
  <a class="pull-left" href="/team/add" class="h">
      <img src="/media/i/add.png" class="img-polaroid" width="64px" >
  </a>
  <div class="media-body">
    <h5 class="media-heading"></h5>
    
    <a href="/team/add" class="h">Создайте свою команду</a>
  </div>
   
</div>
         
</div>  
<script>
    $('.add_team, .del_team').click(function(){
        set_team($(this));
        return false;
    })
    var my = '<?=$u->team->name?>'
    function set_team(t)
    {
        var id = t.parents('.team').id(), act = t.hasClass('add_team');
        if(act && my!='')
        {
            if(!confirm('Вы уже состоите в сообществе "'+my+'"! Хотите его покинуть?')) return;
            else{
                $('.del_team').removeClass('del_team').addClass('add_team').text('Вступить в команду');
            }
        }
        t.removeClass(act?'add_team':'del_team').addClass(act?'del_team':'add_team');
        t.hide().before('<i class="tmp">'+(act?'вступаем в':'покидаем')+' команду, подождите...</i>')
        
        j.g({g:'user/setteam',p:'id='+id+'&a='+(act?1:0)}, function(dt){
            t.show().text(act?'Покинуть команду':'Вступить в команду');
            $('.tmp').remove();
            my = dt.my;
        })
    }
</script>
       
    
        
        
  