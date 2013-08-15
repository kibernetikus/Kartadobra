<div class="thumbnail">
    <?if($prev->loaded()){?><a href="/tasks/<?=$prev->id?>" class="h" style="text-decoration:none;"><i class=" icon-arrow-left"></i> Предыдущее</a><?}?>
    <span style="margin-left:100px;"><a href="/tasks<?=$my?'/my':''?>" class="h" style="text-decoration:none;"> <i class="icon-arrow-up"></i>К списку заданий</a></span>
    <span style="margin-left:90px;"><?if($next->loaded()){?><a href="/tasks/<?=$next->id?>" class="h" style="text-decoration:none;">Следующее <i class=" icon-arrow-right"></i></a><?}?> </span>
    <div><h4 id="d_title"><?=$t->title?></h4></div>
    <small style="margin-left:10px;"><a href="/id<?=$t->author_id?>"><?=$t->author->first_name?> <?=$t->author->last_name?></a></small>
    <div class="caption">
        <p id="d_text"><?=$t->text?></p>
        <?if($t->constant==1){?><h5>Постоянная просьба</h5><?}?><br/><br/>
        <div class="media_gallery">
            <?foreach($t->medias->find_all() AS $v){?>
            <a href="/media/f/orig/<?=media::get($v)?>"><img src="/media/f/small/<?=media::get($v)?>"></a>
            <?}?>
        </div>
        <?if(is_array($t->geo)){?><div id="map_canvas" style="margin:20px 0; padding: 0; height: 300px;" class=""></div><?}?>
        <br><br/>
        <?if($t->author_id==$u->id){?>
        <script>
            //edit
            $('#d_text').attr('title', 'Нажмите для редактирования').css('cursor', 'pointer').click(function(){
                var t = $(this);
                var p = $('<textarea class="d_tar"></textarea>');
                t.before(p).hide();
                p.val(t.text()).keypress(function(e){
                    if(e.keyCode!='13'||p.val()=='') return;
                    var val = p.val();
                    p.before('<div class="hload" style="height:100px;"></div>').remove();
                    j.g({g:'user/edittask',p:'id=<?=$t->id?>&text='+j.d(val)}, function(){
                        $('.hload').remove();
                        t.html(val).show();
                    })            
                }).blur(function(){
                    t.show();
                    p.remove();
                }).focus();
            })
            $('#d_title').attr('title', 'Нажмите для редактирования').css('cursor', 'pointer').click(function(){
                var t = $(this);
                var p = $('<input type="text" class="d_tar"/>');
                t.before(p).hide();
                p.val(t.text()).keypress(function(e){
                    if(e.keyCode!='13'||p.val()=='') return;
                    var val = p.val();
                    p.before('<div class="hload" style="height:100px;"></div>').remove();
                    j.g({g:'user/edittask',p:'id=<?=$t->id?>&title='+j.d(val)}, function(){
                        $('.hload').remove();
                        t.html(val).show();
                    })            
                }).blur(function(){
                    t.show();
                    p.remove();
                }).focus();
            })
        </script>
        <?if($t->mode==0){?>
        <div id="notclose">
        <h4><?=isset($count)?'Просьба выполнена <span id="cnt_users">'.text::get_word_int($count, 'rz', TRUE).'</span>':'Просьба пока не выполнена'?></h4>
        <button class="btn btn-success" onclick="$(this).remove();$('#blockunhelp').slideDown();">Мне помогли</button>
        <div class="hide" id="blockunhelp">
            <?if($is_org){?><input type="text" placeholder="Ссылка на пользователя или его ID" id="taskuser" />
                <?}else{?>
                <input type="text" placeholder="Номер карты" id="cardnumber" /><br/>
                <textarea id="desccard" rows='4' placeholder="Расскажи про обстоятельства при которых попала карта и поблагодари предыдущего владельца"></textarea>
                <?}?><br/>
            <?if(isset($count)){?><button class="btn btn-success" id="adduser">Добавить новое выполнение</button><?}?>
            <button class="btn btn-success" id="closetask">Закрыть просьбу</button>
            </div>
        </div>
        <div id="share" class="hide">
        Мы рады что вам помогли. Поделитесь этим с друзьями, мы уверены, им тоже нужна помощь.

        <script type="text/javascript" src="//yandex.st/share/share.js"
        charset="utf-8"></script>
        <div class="yashare-auto-init" data-yashareL10n="ru"
         data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus"

        ></div> 
        </div>
        <script>
            $('#closetask, #adduser').click(function(){
                var close = $(this).attr('id')=='closetask';
                var f_c = $('#cardnumber').length?$('#cardnumber').val():0,
                f_u = $('#taskuser').length?$('#taskuser').val():0,
                f_d = $('#desccard').val();
                j.g({g:'user/closetask',p:'id=<?=$t->id?>&c='+f_c+'&u='+f_u+'&close='+(close?1:0)+'&d='+j.d(f_d)}, function(dt){
                    if(close)
                    {
                        $('#notclose').show().html(((dt&&dt.id)?('Вам помог пользователь <a href="/id'+dt.id+'">'+dt.n+'</a>'):'<h4>Просьба выполнена</h4>'));
                        $('#share').show();
                    }else{ 
                        $('#cnt_users').text(dt.cnt);
                        $('#taskuser').val('');
                        $('#notclose').show();
                    }
                    $('.tmp').remove();
                })             
                $('#notclose').hide().before('<i class="tmp">Подождите, обрабатываем...</i>');
            })
        </script>
        
        <?}else{?>
        <h4>Просьба выполнена</h4>
        <?if($user){?> пользователем <a href="/id<?=$user->id?>"><?=$user->first_name.' '.$user->last_name?></a><?}?>
        <?}}?><br/><br/>
        <h4>Дискуссия</h4>
        <div><?=comments::show($t)?></div>
    </div>
</div> 
<script>
<?if(is_array($t->geo)){?>
    var myLatlng = new google.maps.LatLng(<?=$t->geo[0]?>, <?=$t->geo[1]?>);

    var map = new google.maps.Map(document.getElementById("map_canvas"), {
        center: myLatlng,
        zoom: 11,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:'<?=$t->title?>',
        icon: "http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png"
    });
<?}?>
</script>
