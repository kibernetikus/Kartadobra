<div class="container" >



          <div class="span6" style="background-color:#FFF; min-height:auto; margin-top:55px; position:relative;  margin-left:270px; margin-right:270px;">
            <br><br>
  <div style="margin-left:30px;">
    <img src="/media/i/vol.png">
    <div style="margin-left:80px;">
   <img src="/media/i/logo_index.png" width="270px">
 </div>

        <br><br>
        <div id="authen">
      <form class="form-horizontal" method="POST">
          <div id="loginerr" class="hide"></div>
  <fieldset id="autchblock">
    
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">E-mail</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Адрес электронной почты" >
        
      </div>
    </div>
       <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Пароль</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Введите пароль" >
        
      </div>
    </div>
      
        <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success btn-large" id="enter" style="float:left;">Войти</button>
      </div>
    </div>
  </fieldset>
</form>
        </div>
      <script>
          $('#enter').click(function(){
              var p = $('#autchblock'),
              f_u = p.find('#username').val(),
              f_p = p.find('#password').val(),
              err = $('#loginerr');
              err.html('Авторизуем, подождите').show();
              p.hide();
              j.g({g:'public/login',p:'username='+f_u+'&password='+f_p}, function(dt){
                  if(dt.err)
                    {
                        err.html(dt.err).show();
                        p.show();
                    }else{
                        top.location.reload();
                    }
              })
              return false;
          })
    </script>     
      
      
      <h4>Войти используя социальную сеть</h4>
      <?=Ulogin::factory()->render()?><br><br>
      <form action="/registration">
       <button class="btn btn-success btn-large" type="submit" style="float:left; width:180px;">Зарегистрироваться</button>
        </form>
      </div>
        </div>
     
</div>
</div>