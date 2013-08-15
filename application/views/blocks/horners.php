
<div class="line"> </div><br>
<div class="row">       
    <ul class="thumbnails" style="margin-left:0; margin-right:0;">
        <? foreach ($honors AS $i => $h) { ?>
            <li style="width:120px; padding:0px;">
                <a data-toggle="modal" id="id<?= $i ?>" href="#horner_info" style="text-decoration:none; text-align:center; font-size:11px;" class="thumbnail horner">
                    <img src="/media/f/orig/_default/fond/h/<?= $i ?>.jpg" > <?= $i == 0 ? 'Помощь на сайте' : $h['name'] ?><br> <?= text::get_word_int($h['count'], 'zd', TRUE) ?>
                </a>
            </li>
        <? } ?>
    </ul>
</div>

<div id="horner_info" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Помощь пользователям</h3>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">

    </div>
</div>
<script>
    $('.horner').click(function(){
        var h = $('#horner_info'), b = h.find('.modal-body'), id = $(this).id();
        b.html('загружаем список заданий..');
        j.g('public/horners/'+id+'/<?= $u->id ?>', function(dt){
            b.html('<ul></ul>');
            $.each(dt, function(i,v){
                b.find('ul').append('<li><a href="/tasks/9" class="h">'+v.t+'</a></li>');
            
            })
            j.update();
        })
    })
</script>