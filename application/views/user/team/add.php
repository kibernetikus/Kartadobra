<h5 style="color:#4170b6; font-weight:bold; letter-spacing: 2px; ">Добавление команды</h5>

<div class="line"> </div><br>
<div id="add_team">
        <form id="tab">
            <label>Введите название команды</label>
            <input type="text" placeholder="Название команды" id="f_name" class="input-xlarge">
             <label>Описание команды</label>
            <textarea id="f_desc" rows="3" class="input-xlarge" placeholder="Расскажите немного о том, чем вы собираетесь заниматься и кто вам нужен"></textarea><br>
            <div id="f_ava" class="hide"></div>
              <a href="" id="ajaxupload" style="width:200px;display:block;margin:10px 0 20px 0;">Добавить аватар</a>
            
           <input type="button" class="btn btn-primary" id="createteam" value="Создать команду">
        </form>
</div>
<script>
    $('#createteam').click(function(){
        var f_name = $('#f_name').val(), f_desc = $('#f_desc').val(), f_media = 0;
        if($('#f_ava img').length)
        {
            f_media = $('#f_ava img').attr('src'), r = /\/([\d]+)\.jpg/
            f_media = r.exec(f_media);
            f_media = f_media[1]; 
        }
        $('#add_team').html('Создаем сообщество, подождите...');
        j.g({g:'user/addteam',p:'n='+j.d(f_name)+'&d='+j.d(f_desc)+'&m='+f_media}, function(dt){
            //j.h('/team'+dt.id);
            top.location.href = '/team'+dt.id;
        })
    })
    j.js('/media/js/ajaxupload.js', false, function(){
        var t = $('#ajaxupload');
        $.ajax_upload(t, {
            action : '/a/user/teamavatar',
            name : 'myfile',
            onSubmit : function(file, ext) {
                t.hide().before('<i class="tmp">Идет загрузка файла...</i>')
            },
            onComplete : function(file, response) {
                $('#f_ava').html('<img id="media" src="/media/f/orig/'+response+'"/>').show();
                t.remove();
                $('.tmp').remove();
            }
        });
    });
</script>
        
        
