  <style>
img.bg {
  /* Set rules to fill background */
  min-height: 100%;
  min-width: 1024px;
  
  /* Set up proportionate scaling */
  width: 100%;
  height: auto;
  
  /* Set up positioning */
  position: fixed;
  top: 0;
  left: 0;
}

@media screen and (max-width: 1024px) { /* Specific to this particular image */
  img.bg {
    left: 50%;
    margin-left: -512px;   /* 50% */
  }
}
</style>
  <img src="/media/i/green.jpg" class="bg" alt="">

  <div class="navbar navbar-inverse navbar-fixed-top" style="background:#FFF; ">
      <div class="navbar-inner" style="background:#FFF; margin-left:0; margin-right:0; width:100%;">
        <div class="container">
          
          <div class="logo_s">
                    <img src="/media/i/logo-inline.svg" >
                </div>
          <div class="nav-collapse collapse">
            <ul class="nav" style="margin-left:200px; margin-top:-5px;">
              <li style="margin-top:2px; ">  </li>
                    <li style="margin-top:2px; ">  <a href="/id<?= $u->id ?>" class="nav h">Профиль</a></li>
                   
                    <li style="margin-top:2px;"> <a href="/feed/" class="nav h">Общение</a></li>
                    
                    <li style="margin-top:2px;"><a href="/fond/" class="nav h">Организации</a></li>
                    <li style="margin-top:2px;"><a href="/users/" class="nav h">Пользователи</a></li>
                    <li style="margin-top:2px;"><a href="/team/" class="nav h">Команды</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  <!--<div id="user-menu" >
            <div id="menu">
                <div class="logo_s">
                    <img src="/media/i/logo-inline.svg" >
                </div>
                <span style="margin-left:220px; top:12px; position:relative;">
                <input type="text" value="Найдите что вас интересует">
              </span>
                <ul id="links" style="top:20px; left:0px; vertical-align:50%;">


                    <li style="margin-top:2px; ">  </li>
                    <li style="margin-top:2px; ">  <a href="/id<?= $u->id ?>" class="nav h">Профиль</a></li>
                   
                    <li style="margin-top:2px;"> <a href="/feed/" class="nav h">Общение</a></li>
                    
                    <li style="margin-top:2px;"><a href="/fond/" class="nav h">Организации</a></li>
                    <li style="margin-top:2px;"><a href="/users/" class="nav h">Пользователи</a></li>
                    <li style="margin-top:2px;"><a href="/team/" class="nav h">Команды</a></li>



                    <li><a href="http://pyramideofgood.com" style="margin-left:60px;"></a></li>
                    
                </ul>
                <ul id="social">

                </ul>
            </div>
       
        </div> -->
       
<div class="container" style="z-index:100; position:relative; margin-top:70px;">


    <div class="span12" style="background:#fff;  margint-top:30px;  ">
      <div class="row" style="margin-top:20px; margin-left:0; ">
        <div class="span3">
<div id="panel" style="  ">


        <img id="avatar" class="border userpic" style="" src="<?=media::user($u, 'orig')?>"  ><br>
        <!--
<ul style="list-style:none; margin-left:3px; margin-top:10px; font-size:12px;">
<li style="margin-top:2px;"> <a href="/settings/" class="h">Настройки</a></li>
 <li><a href="/tasks/my/" class="h">Создать просьбу</a></li>
                        <li><a href="">Предложить помощь</a></li>
                        <li><a href="/tasks/" class="nav h">Просьбы пользователей</a></li>
                        <li><a href="">Предложения пользователей</a></li>
                        <li><a href="">Сбор средств</a></li>
<li><a href="#feedback"   data-toggle="modal">Обратная связь</a></li>
<li><a href="/exit" >Выйти</a></li>
</ul>-->
</div>
</div>
<div class="span4">
 <p style="font-size:18px; color:#4271b5; font-weight:350;" ><?=$u->first_name?> <?=$u->last_name?></p>
            <div class="about"><?=$u->desc?></div>
            <hr style="width:75%;">
           
             <p><b>Город:</b> <?=$u->city->name?></p>
            <b>Профиль в социальной сети:</b> <a href="<?=$u->social?>" target="blank" style="" ><?=$u->social?></a>
             <p><b>Телефон:</b> <?=$u->phone?> </p>
             <p><b>Skype:</b> <?=$u->skype?> </p>
</div>

    </div>
</div>
<div class="span12" style="background:#4271B5;height:30px;">
  </div>
<div class="span12" id="hcontent" style="background:#fff;  position:relative;   margint-top:30px;  ">
   <?=$hcontent?>

     </div>
</div> 
