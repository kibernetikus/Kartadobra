
          <div id="blog" style=" width:100%;">
                    <?if($add){?>
                    <div class="postform">
                        <form action="blog.php" data-content="#messages" id="blog-form" method="POST">
                            <input name="text" id="new_message" type="text" class="default" style="width:460px; float:left; margin-right:5px; margin-top:-3px;" rows="8" value="Новое сообщение...">
                            

<input type="button"  id="mess_submit" class="btn btn-large btn-block btn-info" style=" width:100px; height:30px;  " value="Отправить">
 <br><br>


<div class="istr" style="margin-top:-20px; cursor:pointer;"><a href="" class="btn btn-info btn-large" id="ajaxupload" style="height:23px;display:block; width:45px; cursor:pointer;" alt="Прикрепить изображение"><i class="icon-camera icon-large" style="margin-left:13px; cursor:pointer;"></i></a>

                            <div id="files" class="hide" style="margin-top:10px;"></div>
                        </form>
                    </div><br>
                    <?}?>
                    <div class="pole" style="width:580px;">
                        <?if($add){?>
                        <div class="post hide" id="post_template" style="width:540px;position:relative;margin-bottom:20px;">

                            <div class="avatar" style="position:absolute;"><img src="/media/i/avatar.png" width="55px" class="img-rounded avatar"/></div>


                            <div class="postbody "  style="width:520px; margin-left:60px; margin-top:0; position:relative;" >

                                <div class="userfield" style="position:relative; "> <a href="" class="name" style="font-weight: bold;">Alexandr Pozdnyakov</a><span><a href="" id="closex" onclick="remove_post($(this));return false;"><i class="icon-remove icon-small" style="float:right;"></i></a></span></div>
                                <div class="comment text" style="position:relative;"></div>
                                <div class="media hide"></div>

                                <br>
                                <div style="float:left;"><a href="" id="showcommentbox">Дискуссия(0)</a></div> <div style="margin-left:315px;"><small></small></div>
                            </div><br>

                            <div id="commentbox" ></div>  
                        </div>
                        <?}?>
                        <?foreach($blogs AS $b){?>
                       <div class="post" id="id<?=$b->id?>" style="width:540px;position:relative;margin-bottom:20px;">

                            <div class="ava" style="position:absolute;"><img src="<?=media::user($b->media_id, 'mini', $b->type_id)?>" width="55px" class="img-rounded"></div>


                            <div class="postbody "  style="width:480px; margin-left:60px; margin-top:0; position:relative;" >

                                <div class="userfield" style="position:relative; "> <a href="/id<?=$b->user_id?>" style="font-weight: bold;"><?=$b->first_name.' '.$b->last_name?></a><?if($u->id==$b->user_id){?><span><a href="" id="closex" class="remove_post" onclick="remove_post($(this));return false;"><i class="icon-remove icon-small" style="float:right;"></i></a></span><?}?></div>
                                <div class="comment" style="position:relative;"><?=$b->text?></div>
                                <?if($b->media>0){?>
                                <div class="media media_gallery" style="height:330px; overflow:hidden;">
                                    <?foreach(ORM::factory('Blog', $b->id)->medias->find_all() AS $m){?>
                                    <a href="media/f/orig/<?=media::get($m)?>"><img src="/media/f/orig/<?=media::get($m)?>"/></a>
                                    <?}?>
                                </div>
                                <?}?>
                                <br>
                                
                            </div><br>
                            <div style="margin-left:60px;"><?=comments::show($b, 'Model_Blog')?></div>
     
                    
                
</div> 
                        <?}?>
                    </div> 
                    
                    
                    

                </div>
<?if($add){?>
<script>
    j.js('/media/js/ajaxupload.js', false, function(){
        var t = $('#ajaxupload'), p = $('#files');
        $.ajax_upload(t, {
            action : '/a/user/media',
            name : 'myfile',
            onSubmit : function(file, ext) {
                t.hide().before('<i class="tmp">Идет загрузка файла...</i>')
            },
            onComplete : function(file, response) {
                p.show().append('<a href="/media/f/orig/'+response+'"><img src="/media/f/mini/'+response+'"/></a>');
                t.show();
                $('.tmp').remove();
            }
        });
    });
    $('#new_message').focus(function(){
        var t = $(this);    
        var p = $('<textarea style="width:530px;height:100px;" id="message"></textarea>')
        if(t.hasClass('default')) t.removeClass('default');
        t.before(p).hide();
        p.focus().blur(function(){
            var tt = $(this);
            if(tt.val()=='')
            {
                p.remove();
                t.show().addClass('default');
            }
        })
    })
    $('#mess_submit').click(function(){
        var t = $(this), p = t.parents('.istr'), m = $('#message');
        if(m.length && m.val()!='')
        {
            var val = m.val(),
            img = '';
            $('#files img').each(function(i){
                var s = this.src, r = /\/([\d]+)\.jpg/
                s = r.exec(s);
                img += (i>0?';':'')+s[1];            
            });
            p.hide().before('<i class="tmp">подождите, отправляем...</i>');
            m.attr('disabled', true);
            j.g({g:'user/blogadd',p:'t='+encodeURIComponent(val)+'&m='+img<?=$obj?('+\'&obj='.$obj->id.'&md='.$model.'\''):''?>}, function(dt){
                var pole = $('.pole'), tmp = $('#post_template').clone();
                tmp.find('.name').html(dt.n).attr('href', '/id'+dt.uid);
                tmp.attr('id', 'id'+dt.id);
                tmp.find('.ava').attr('src', dt.a).css({'width':'55px', 'height':'55px'});
                tmp.find('.text').html(dt.t);
                if(img!='')
                {
                    tmp.find('.media').html($('#files').html()).show().addClass('media_gallery');
                    $('#files').html('').hide();
                    
                }
                pole.prepend(tmp);
                if(img!='') j.set_media();
                tmp.show();
                m.remove();
                p.show();
                $('.tmp').remove();
                $('#new_message').show().addClass('default');
                
            })
        }
    })
    function remove_post(t)
    {
        var p = t.parents('.post'), id = p.id();
        p.html('удаляем...');
        j.g({g:'user/blogdel',p:'id='+id}, function(){
            p.remove();
        });
    }
 
</script>
<?}?>
  </div>