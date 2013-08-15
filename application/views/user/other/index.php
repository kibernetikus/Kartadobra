  <div id="user-menu" >
            <div id="menu">
                <div class="logo_s">
                    <img src="/media/i/logo-inline.svg" >
                </div>
                <ul id="links" style="top:20px; left:212px;">
                    <li style="margin-top:2px; ">  <a href="/id<?= $u->id ?>" class="nav h">Профиль</a></li>
                    <li style="margin-top:2px;"> <a href="/tasks/my/" class="nav h">Создать просьбу</a></li>
                    <li style="margin-top:2px;"> <a href="/feed/" class="nav h">Общение</a></li>
                    <li style="margin-top:2px;"><a href="/tasks/" class="nav h">Просьбы</a></li>
                    <li style="margin-top:2px;"><a href="/fond/" class="nav h">Организации</a></li>
                    <li style="margin-top:2px;"><a href="/users/" class="nav h">Пользователи</a></li>
                    <li style="margin-top:2px;"><a href="/team/" class="nav h">Команды</a></li>



                    <li><a href="http://pyramideofgood.com" style="margin-left:60px;"></a></li>
                    
                </ul>
                <ul id="social">

                </ul>
            </div>
       
        </div> 
<div class="container" style="margin-top:60px;">
<div class="row" style=" background:#fff;  overflow:hidden; _zoom:1; ">

    <div class="span3" style="width:257px; margin:0; position:relative; min-height:1000px;  padding-bottom:10000px; margin-bottom:-10000px; ">
<div id="panel" style="margin:0 auto; width:200px; margin-top:20px;">


        <img style="width:200px;"  class="border userpic" src="/media/f/orig/<?=media::get($user->media_id, '_default/fond/'.$user->type_id.'.jpg')?>"  ><br>
     <ul style="list-style:none; margin-left:3px; margin-top:10px;">
        <li><a href="" class="h">Просьбы пользователя (+2)</a></li>
        <li><a href="" class="h">Предложения пользователя (+3)</a></li>
     </ul>
    </div>

    </div>

    <div class="span7" style="width:722px; margin-top:20px; padding-bottom:10000px;
     margin-bottom:-10000px;">


        <div id="middle" >
            <a href="<?=$user->ulogins->find()->identity?>" style="font-size:18px; font-weight:bold;" ><?= $user->first_name ?> <?= $user->last_name ?></a><br>
            <?= $user->city->name ?>
            <hr style="width:70%;">
            <div class="about">

                <?=$user->desc?>

            </div>
            <br>







            <!--end-->
<?if(!$is_org){?>
    <!-- Бэйджики -->
    <?=blocks::honors($user)?>        
    <!--/бэйджики-->
<?}?>
            <h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">Просьбы пользователя</h5></a>
            <div class="line"></div><br>

            <?if($tasks->count()==0){?><div>Нет просьб</div><?}?>

            <div  style="width:722px; position:relative; bottom:5px; margin-bottom:20px; height:auto; ">
                <?foreach($tasks AS $v){?>
<div class="media">
         <hr>
  <a class="pull-left" href="userpage">
      <img src="/media/f/small/<?= media::get($v->medias->find()) ?>" class="img-polaroid" width="65px" >
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="/tasks/<?= $v->id ?>"><?= $v->title ?></a></h4>
    
  <?= text::get($v->text, 100) ?><br>
Просьба актуальна до 20.03.2013
    
  </div>
</div>
   <?}?>             
            </div>




<?if($is_org){?>
            <!--Карты мира-->
            <?=blocks::cards($user)?>

<?}?>




                <!--Блог-->
                <h5 style="color:#4170b6; font-weight:bold; ">Блог</h5>
                <div class="line"> </div><br>
                <?=blocks::blogs($user)?>
                <!--конец блога-->




            </div>
        </div>
    
    </div>
</div>

<script>
    $("#showform").click(function(){
        $("#addcard").toggle();
    });
</script>