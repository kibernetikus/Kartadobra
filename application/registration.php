   <h5>Для социальных учреждений и НКО</h5>
   <ul class="nav nav-tabs">
  <li<?=$data ? '' : ' class="active"'?>><a href="#authen" data-toggle="tab">Авторизация</a></li>
  <li<?=!$data ? '' : ' class="active"'?>><a href="#reg" data-toggle="tab">Регистрация</a></li>
 
  
</ul>
  <div id="myTabContent" class="tab-content">
        
        <div id="authen"  class="tab-pane fade in active">
      <form class="form-horizontal" action='' method="POST">
  <fieldset>
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Логин</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Введите логин" class="input-xlarge">
        
      </div>
    </div>
       <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Пароль</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Введите пароль" class="input-xlarge">
        <a href="">Забыли пароль?</a>
      </div>
    </div>
      
        <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-primary" style="float:left;">Войти</button>
      </div>
    </div>
  </fieldset>
</form>
        </div>
      
      
      
      
      
      
      
      <div id="reg"  class="tab-pane fade in">
   <form class="form-horizontal" action='' method="POST">
  <fieldset>
    
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
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Начните вводить название города" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>
 <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Название организации</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Введите название организации" class="input-xlarge">
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
           <option id="2">Медицинское учереждение</option>
           <option id="3">Помощь детям</option>
           <option id="4">Помощь ветеранам</option>
           <option id="5">Помощь инвалидам и пожилым</option>
           <option id="6">Помощь животным</option>
           <option id="7">Помощь природе</option>
           <option id="8">Благотворительный фонд</option>
    <option id="9">Помощь городу</option>
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
        <button class="btn btn-success">Зарегистрировать</button>
      </div>
    </div>
  </fieldset>
</form>
        </div>
</div>