<style>
    #media_modal .modal-footer img.act {border-color:green;}
    #media_modal .modal-footer img {border:1px solid #fff;cursor:pointer;}
</style>
<div id="media_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Просмотр изображений</h3>
    </div>
    <div class="modal-body">
        
    </div>
    <div class="modal-footer">

    </div>
</div>
<script>
    j.set_media = function()
    {
        $('.media_gallery a').click(function(){
            var t = $(this), g = t.parent(), m = $('#media_modal'), b = m.find('.modal-body'), f = m.find('.modal-footer');
            
            b.html('<div class="hload"></div>');
            m.modal('show');
            var img = new Image;
            img.src = t.find('img').attr('src').replace('mini', 'orig').replace('small', 'orig');
            img.onload = function(){
                b.html(img);
            }
            f.html('');
            g.find('img').each(function(){
                var elm = $(this).clone();
                elm.css('height', '55px');
                if(t.find('img').attr('src')==elm.attr('src')) elm.addClass('act');
                f.append(elm)
            })
            f.find('img').click(function(){
                f.find('.act').removeClass('act');
                $(this).addClass('act');
                b.html('<div class="hload"></div>');
                var img = new Image;
                img.src = $(this).attr('src').replace('mini', 'orig').replace('small', 'orig');
                img.onload = function(){
                    b.html(img);
                }
            })
            return false;
        })
    }
</script>