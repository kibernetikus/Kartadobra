<link rel="stylesheet" type="text/css" href="/media/js/jquery.autocomplete.css" />
<div id="p_settings" style="width:720px;">
<h4>Настройки профиля</h4>
Персонализируйте свою страницу
       <div class="line"> </div><br>

       <div style="cursor:pointer;">
       <a href="" id="ajaxupload" class="btn btn-success btn-large" style="padding:10px;width:200px; z-index:10;cursor:pointer;">Изменить фотографию профиля</a>
      </div>
      <br>


       <div id="settingsform" class="cityblock">






<div class="control-group">
<legend class="control-label">Изменить город</legend>
   <div class="controls">
<input type="hidden" id="city_id" value="<?=$u->city_id?>"/>
<input type="text" style="width:400px;" name="city" placeholder="Изменить город" id="city_search" value="<?=$u->city->name?>"><br>
<?if($is_org){?>
       <select id="type_id">
           <?foreach(ORM::factory('Type')->find_all() AS $v){?>
           <option value="<?=$v->id?>"<?=$v->id==$u->type_id?' selected':''?>><?=$v->name?></option>
           <?}?>
       </select><br/>
<?}?>

</div>
      </div>
  <legend >Имя и Фамилия (Название организации):</legend>
  
<input type="text" id="fname" placeholder="Имя" value="<?=$u->first_name?>"/>
     





   
<input type="text" id="lname" placeholder="Фамилия"  value="<?=$u->last_name?>"/>
     



<div class="control-group">
<legend class="control-label">Телефон:</legend>
   <div class="controls">
<input type="text" id="phone" value="<?=$u->phone?>"/>
     

</div>    
<div class="control-group">
<legend class="control-label">Изменить описание страницы</legend>
   <div class="controls">

       <textarea id="desc" placeholder="Описание" maxlength="800" style="width:500px; height:300px;"><?=$u->desc?></textarea><br/>

</div>
</div>


</div>
        <input type="button" class="btn btn-large btn-block btn-info" style="width:31%;" id="save_settings" value="Сохранить"><br/><br/>
        
       </div>
</div>
<script>
    j.js('/media/js/ajaxupload.js', false, function(){
        var t = $('#ajaxupload');
        $.ajax_upload(t, {
            action : '/a/user/avatar',
            name : 'myfile',
            onSubmit : function(file, ext) {
                t.hide().before('<i class="tmp">Идет загрузка файла...</i>')
            },
            onComplete : function(file, response) {
                $('#avatar').attr('src', '/media/f/orig/'+response)
                t.show();
                $('.tmp').remove();
            }
        });
    });
    $('#save_settings').click(function(){
        var t = $(this), s = $('#city_id').val(), tp = $('#type_id').length?$('#type_id').val():0;
        var d = $('#desc').val();
        var phone = $('#phone').val();
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        $('#settingsform input, #settingsform select, #settingsform textarea').attr('disabled', true);
        t.hide().before('<i class="tmp">идет сохранение, подождите...</i>')

        j.g({g:'user/settings',p:'c='+s+'&phone='+phone+'&fname='+fname+'&lname='+lname+'&t='+tp+'&d='+encodeURIComponent(d)}, function(){
            t.show();
            $('.tmp').remove();
            $('#settingsform input, #settingsform select, #settingsform textarea').attr('disabled', false);
 top.location.href='/';
        })

    })
</script>