
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
   
        <body>
        
     <div id="user-menu" >
            <div id="menu">
                <div class="logo_s">
                    <img src="/media/i/logo-inline.svg" >
                </div>
                <ul id="links" style="margin-left:200px; top:20px;">
              <li><a href="#feedback"  class='nav' data-toggle="modal">Регистрация</a></li>
              <li><a href="#feedback"  class='nav' data-toggle="modal">Расскажите о себе</a></li>
              <li><a href="#feedback"  class='nav' data-toggle="modal">Карты Добра</a></li>
              <li><a href="#feedback"  class='nav' data-toggle="modal">Просьбы</a></li>
              <li><a href="#feedback"  class='nav' data-toggle="modal">Предложения</a></li>
          
                </ul>
                <ul id="social">

                </ul>
            </div>
       
        </div> 

        <div class="container" style="padding-top:100px;">
          <div class="span12">
            <div class="span2">
            <img src="/media/i/ava.jpg" width="100px">
            </div>
            <div class="span9">
<ul class="nav nav-tabs" style="margin-top:-20px;">
  <li class="active"><a href="#reg" data-toggle="tab" id="addtsk">Регистрация пользователя</a></li>
    <li ><a href="#orgreg" data-toggle="tab">Регистрация организации</a></li>
</ul>

<div id="myTabContent" class="tab-content">
  <div id="reg" class="tab-pane fade in active" style="width:720px;  margin-top:0px;">
              <h4>Заполните форму регистрации</h4>
             
<div >

  <form class="form-horizontal" action='' method="POST">
       <div id="errblock"></div>
  <fieldset id="regform">
      
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Логин</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Придумайте логин" class="input-xlarge">
        <p class="help-block">Логин может содержать только латинские символы и цифры</p>
      </div>
    </div>
 <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Город</label>
      <div class="controls cityblock">
          <input type="hidden" id="city_id"/>
        <input type="text" id="city_search" name="city" placeholder="Начните вводить название города" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
 <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Имя</label>
      <div class="controls">
        <input type="text" id="name" name="username" placeholder="Введите название организации" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
     <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Фамилия</label>
      <div class="controls">
        <input type="text" id="lname" name="username" placeholder="Введите название организации" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
      
      <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Электропочта</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Электропочта" class="input-xlarge">
        <p class="help-block">Пожалуйста, укажите вашу электропочту</p>
      </div>
    </div>
  <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="phone">Телефон:</label>
      <div class="controls">
        <input type="text" id="phone" name="phone" placeholder=" Номер телефона" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
      <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="phone">Skype:</label>
      <div class="controls">
        <input type="text" id="skype" name="skype" placeholder="Аккаунт Skype" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="social">Профиль в социальной сети:</label>
      <div class="controls">
        <input type="text" id="soc" name="soc" placeholder="Vk,Fb,Twitter" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
      <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="type">Пол:</label>
      <div class="controls">
       <select id="type">
                      <option value="1">Мужской</option>
                      <option value="2">Женский</option>
       </select>
       <p class="help-block">Укажите чем занимается ваша организация</p>
      </div>
      </div>

      
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Пароль</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Придумайте пароль" class="input-xlarge">
        <p class="help-block">Пароль может содержать латинские буквы и цифры и должен быть длиннее 4 символов</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Подтвердите пароль</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль" class="input-xlarge">
        <p class="help-block">Пожалуйста введите еще раз пароль</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success btn-large" id="goreg" style="width:160px;">Зарегистрировать</button>
      </div>
    </div>
  </fieldset>
</form>
<script>
      $('#goreg').click(function(){
          var p = $('#regform'), 
          err = $('#errblock'),
          f_login = p.find('#username').val(),
          f_password = p.find('#password').val(),
          f_city_id = p.find('#city_id').val(),
          f_name = p.find('#name').val(),
          f_lname = p.find('#lname').val(),
          f_email = p.find('#email').val(),
          f_phone = p.find('#phone').val(),
          f_skype = p.find('#skype').val(),
          f_social = p.find('#soc').val(),
          f_type = p.find('#type').val()
          t = $(this)
          p.hide();
          err.text('Подождите, идет регистрация...').show();
          j.g({g:'public/registration',p:'username='+f_login+'&password='+f_password+'&c='+f_city_id+'&n='+f_name+'&e='+f_email+'&t='+f_type+'&fam='+f_lname+'&phone='+f_phone+'&skype='+f_skype+'&social='+f_social}, function(dt){
            if(dt.err)
            {
                err.html(dt.err).show();
                p.show()
            }else{
                top.location.href='/cardreg';
            }
          })
          return false;
      })    
</script>
              
        </div>

        </div>
        <div  id="orgreg" class="tab-pane fade" style="width:720px;  margin-top:0px;">
        <div  class="tab-pane fade in">
   <form class="form-horizontal" action='' method="POST">
       <div id="errblock"></div>
  <fieldset id="orgregform">
      <h4>Заполните форму регистрации для организаций</h4>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Логин</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Придумайте логин" class="input-xlarge">
        <p class="help-block">Логин может содержать только латинские символы и цифры</p>
      </div>
    </div>
 <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Город</label>
      <div class="controls cityblock">
          <input type="hidden" id="city_id"/>
        <input type="text" id="city_search" name="city" placeholder="Начните вводить название города" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
 <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Название организации</label>
      <div class="controls">
        <input type="text" id="name" name="username" placeholder="Введите название организации" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
    
      
      <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Электропочта</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Электропочта" class="input-xlarge">
        <p class="help-block">Пожалуйста, укажите вашу электропочту</p>
      </div>
    </div>
 
      <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="type">Тип учереждения</label>
      <div class="controls">
       <select id="type">
           <?foreach(ORM::factory('Type')->find_all() AS $v){?>
           <option value="<?=$v->id?>"><?=$v->name?></option>
           <?}?>
       </select>
       <p class="help-block">Укажите чем занимается ваша организация</p>
      </div>
      </div>
      
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Пароль</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Придумайте пароль" class="input-xlarge">
        <p class="help-block">Пароль может содержать латинские буквы и цифры и должен быть длиннее 4 символов</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Подтвердите пароль</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль" class="input-xlarge">
        <p class="help-block">Пожалуйста введите еще раз пароль</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success btn-large" id="orggoreg" style="width:160px;">Зарегистрировать</button>
      </div>
    </div>
  </fieldset>
</form>
<script>
      $('#orggoreg').click(function(){
          var p = $('#orgregform'), 
          err = $('#errblock'),
          f_login = p.find('#username').val(),
          f_password = p.find('#password').val(),
          f_city_id = p.find('#city_id').val(),
          f_name = p.find('#name').val(),
          f_email = p.find('#email').val(),
          f_type = p.find('#type').val()
          t = $(this)
          p.hide();
          err.text('Подождите, идет регистрация...').show();
          j.g({g:'public/orgregistration',p:'username='+f_login+'&password='+f_password+'&c='+f_city_id+'&n='+f_name+'&e='+f_email+'&t='+f_type}, function(dt){
            if(dt.err)
            {
                err.html(dt.err).show();
                p.show()
            }else{
                top.location.reload();
            }
          })
          return false;
      })    
</script>
   </div>    
   </div>
      </div>
        </div>
               <!--<form class="form-horizontal" action=''  method="POST">
          <div id="errblock"></div>
 <fieldset id="regform">
    
    <div class="control-group">
      
      <label class="control-label"  for="email" style="width:180px;">Электронная почта:<sup style="color:#FF0D2A;">*</sup></label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Электронная почта" >
        
      </div>
    </div>
    <div class="control-group">
      
      <label class="control-label"  for="password" style="width:180px;">Придумайте пароль:<sup style="color:#FF0D2A;">*</sup></label>
      <div class="controls">
        <input type="text" id="password" name="password" placeholder="Придумайте пароль" >
        
      </div>
    </div>

    
    <h5>Как к вам обращаться?</h5><br>
    <div class="control-group">
      
      <label class="control-label"  for="username">Имя<sup style="color:#FF0D2A;">*</sup></label>
      <div class="controls">
        <input type="text" id="first_name" name="first_name" placeholder="Имя" >
        
      </div>
    </div>
    <div class="control-group">
            <label class="control-label"  for="username">Фамилия<sup style="color:#FF0D2A;">*</sup></label>
      <div class="controls">
        <input type="text" id="last_name" name="last_name" placeholder="Фамилия" >
        
      </div>
    </div>
 <div class="control-group">
   <h5>Пол:<sup style="color:#FF0D2A;">*</sup></h5><br>
    <label style="cursor:pointer;">
  <input type="radio" name="sex" id="male" value="1">
  Мужской
</label>
<label style="cursor:pointer;">
  <input type="radio" name="sex" id="female" value="2">
  Женский
</label>
</div>
     <div class="control-group">
      <h5>Укажите ваш город:</h5><br>
      <label class="control-label"  for="username">Город:<sup style="color:#FF0D2A;">*</sup></label>
      <div class="controls cityblock">
          <input type="hidden" id="city_id"/>
      
        <input type="text" id="city_search" name="city" placeholder="Начните вводить название города" >
        
      </div>
    </div>
      <div class="control-group">
      <h5>Укажите ваши контактные данные:</h5><br>
      <label class="control-label"  for="phone">Телефон:</label>
      <div class="controls">
        <input type="text" id="phone" name="phone" placeholder="Номер телефона" >
        
      </div>
    </div>
    <div class="control-group">
     
      <label class="control-label"  for="skype">Skype:</label>
      <div class="controls">
        <input type="text" id="skype" name="skype" placeholder="Skype" >
        
      </div>
    </div>
    <div class="control-group">
     
      <label class="control-label"  for="social">Профиль в социальной сети:</label>
      <div class="controls">
        <input type="text" id="soc" name="soc" placeholder="Vk, Facebook, Twitter" >
        
      </div>
    </div>
      <div class="control-group">
     
      <label class="control-label"  for="username">Текст о себе:</label>
      <div class="controls">
        <textarea id="about" name="about" placeholder="Расскажите немного о себе, если хочешь"  style="height:100px;"></textarea>

     
      
    Или войдите используя аккаунт социальной сети: 

      
        <div class="control-group">
      
      <div class="controls">
        <button class="btn btn-success btn-large" id="goreg" style="float:left;">Продолжить</button>
      </div>
    </div>
    </div>
</fieldset>
</form>
</div>     
<script>
      $('#goreg').click(function(){
          var p = $('#regform'), 
          err = $('#errblock'),
          f_name = p.find('#first_name').val(),
          f_lname = p.find('#last_name').val(),
          f_password = p.find('#password').val(),
          f_city_id = p.find('#city_id').val(),
          f_skype = p.find('#skype').val(),
          f_social = p.find('#soc').val(),
          f_email = p.find('#email').val(),
          f_about = p.find('#about').val(),
          f_phone = p.find('#phone').val()
          p.hide();
          err.text('Подождите, идет регистрация...').show();
          j.g({g:'public/registration',p:'l_name='+l_name+'&password='+f_password+'&c='+f_city_id+'&n='+f_name+'&e='+f_email+'&s='+f_skype+'&v='+f_social+'&a='+f_about+'&phone='+f_phone}, function(dt){
            if(dt.err)
            {
                err.html(dt.err).show();
                p.show()
            }else{
                top.location.reload();
            }
          })
          return false;
      })    
</script>-->
    
          </div>
        </div>

        </body>
</html>