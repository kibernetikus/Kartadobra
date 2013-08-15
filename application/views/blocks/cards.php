<h3 style=" font-weight:300; size:18px; letter-spacing: 2px;">Карты Добра</h3>
 
<div id="cards" style="position:relative; bottom:5px; ">
<a data-toggle="modal" href="#register" id="showform" style="font-size:14px;color:#7EBC49;">Зарегистрировать карту</a>
<hr style="width:100%;">
    <div class="cards">

        
        <? foreach ($cards AS $c) {
            
            $cnt = $card_hide ? 0 : $c->actions->count_all(); ?>
            <div style="width:540px;margin-bottom:10px;" class="card<?= $card_hide ? ' hide' : '' ?>" id="card<?= $card_hide ? 0 : $c->id ?>">
                <div class="row">
                    <div class="span2">
                <img src="/media/i/card_small.png">
            </div>
            <div class="span4" id="info">
                <a href="#"  style="top:35px;" onclick="return card_open($(this));" class="card_open">Карта Мира №<span class="num"><?= $card_hide ? 0 : $c->id ?></span> </a> <br><span class="actcnt"><?= $card_hide ? '' : text::get_word_int($cnt, 'p', TRUE) ?></span>
                 <br><a href="">  Рейтинг: <span class="rating"><?= $cnt * 1.5 ?></span></a> <br>
                <div style="width:540px;" class="cardinfo hide">
    <? foreach ($card_hide ? array(0 => 1) : $c->actions->find_all() AS $i => $a) { ?>
                        <div class="view">
                            <a data-toggle="modal" href="#user_info" id="id<?= $card_hide ? 0 : $a->id ?>" onclick="card_info($(this))">
                                 <span><?= $card_hide ? '' : ($a->user_id == $u->id ? 'Вы' : '#' . ($i + 1)) ?></span> <img width="20" src="/media/i/icons/man<?= $card_hide ? '' : ($a->user_id == $u->id ? '_green' : '') ?>.png"/></a> 
                        </div>
    <? } ?>
                </div>
            </div>

            </div>
            <hr style="width:115%;">
                <div class="sp"></div>
               

            </div>
    <? } ?>
    </div>
<? if ($add) { ?>
       
        <div class="sp"></div>



        <div id="register" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Добавить Карту Добра</h3>
            </div>
            <div class="modal-body">

                <form action="addcard.php" method="POST" id="reg">
                    <small><b>Если вы стали обладателем 16 значной карты - вводите номер без разделителей</b>
                        </small>

                    <input type="text" id="number" value="" placeholder="номер карты" style="width:95%;"></p>

                    <input id="city_id" type="hidden" value="<?= $u->city_id ?>"/>
                    <input type="text" id="city_search" value="<?= $u->city->name ?>" placeholder="город" style="width:95%;"/></p>
                    <textarea id="comment" rows="5" cols="30" placeholder="расскажи как карта попала к тебе" style="width:95%;"></textarea></p>
                    <input id="cardreg" type="button" class="btn btn-large btn-block btn-info" value="Зарегистрировать">
                </form>

            </div>
            <div class="modal-footer">

            </div>
        </div>
<? } ?>

    <div id="user_info" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel"><a style="" class="un" href="http://www.facebook.com/alexandr.pozdnyakof"> Alexandr Pozdnyakof Красноярск #1</a></h3>
        </div>
        <div class="modal-body">
            <div style="width:55px; height:55px; float:left; position:relative;">
                <img class="ava" src="/media/i/avatar.png">
            </div>
            <div class="comment">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
<script>
    /*CARDS*/
    function card_open(t)
    {    
        t.parents('.card').find('.cardinfo').slideToggle();
        
        return false;
        
    }
<? if ($add) { ?>
             $('#cardreg').click(function(){
                 var bb = $(this).parents('.modal'), p = bb.find('.modal-body');
                 var id = p.find('#number').val(), city = encodeURIComponent(p.find('#city_id').val()), txt = encodeURIComponent(p.find('#comment').val());
                 if(id==''||city==''||txt=='')
                 {
                     alert('Не все поля заполнены!');
                     return false;
                 }
                 p.before('<i class="tmp">подождите, добавляем карту...</i>').hide();
                 j.g({g:'user/addcard',p:'id='+id+'&c='+city+'&t='+txt}, function(dt){
                     var b = $('.cards'), c = b.find('#card'+id);
                     if(!c.length)
                     {
                         c = b.find('.card:first').clone();
                         b.append(c);
                         c.show();
                     }            
                     c.find('.num').text(id);
                     c.find('.rating').text(dt.r?dt.r:0);
                     c.find('.actcnt').text(dt.p);
                     c.attr('id', 'card'+id);
                     var ci = c.find('.cardinfo'), vw = ci.find('.view:first').clone();
                     ci.html('').show();
                     $.each(dt.a, function(i,v){
                         var vv = vw.clone();
                         vv.find('span').text(v.my?'Вы':'#'+(i+1));
                         vv.find('img').attr('src', v.my?'/media/i/icons/man_green.png':'/media/i/icons/man.png')
                         vv.find('a').attr('id', 'id'+v.id)
                         ci.append(vv);
                     })
                     bb.find('.tmp').remove();
                     p.show().find('#number').val('');
                     p.find('#comment').val('');
                     bb.modal('hide');    
                 })
             })
<? } ?>
         function card_info(t)
         {
             var b = $('#user_info');
             b.prepend('<i class="tmp">Загружаем информацию...</i>');
             b.find('.modal-header, .modal-body').hide();
             j.g('user/getaction/'+t.id(), function(dt){
                 b.find('.modal-header').show().find('.un').text(dt.n).attr('href', '/id'+dt.uid)
                 b.find('.modal-body').show().find('.comment').text(dt.t)
                 b.find('.modal-body .ava').attr('src', dt.a);
                 b.find('.tmp').remove();
             })
         }
         j.js('/media/js/jquery.autocomplete.min.js', false, function(){
             $('#city_search').click(function(){
                 $(this).select();
             }).autocomplete('/a/public/cities', {
                 width: 320,
                 max: 10,
                 autoFill: true,
                 scroll: true,
                 scrollHeight: 300,
                 dataType: "json",
                 parse: function(data) {
                     return $.map(data, function(row) {
                         return {
                             data: row,
                             value: row.n,
                             result: row.n
                         }
                     });
                 },
                 formatItem: function(dt) {
                     return dt.n+'<br/><span>'+dt.r+'</span>';
                 }
             }).result(function(e, dt) {
                 $('#city_id').val(dt.i);
             });
         })
</script>