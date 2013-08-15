<div id="id<?=$model_id?>_<?=$object_id?>" class="shadow commentsblock"> 
    <div class="polecomm">
   <?foreach($comments AS $c){?>
        <div class="commentpost<?=$hide ? ' hide' : ''?>">
         <hr>
            <div class="avatar" style="position:absolute;"><img src="<?=$hide ? '' : '/media/f/mini/'.media::get($c->user->media_id)?>" width="55px" class="img-rounded ava"></div>
                <div class="postbody "  style="width:480px; margin-left:60px; margin-top:0; position:relative;" >
    
                        <div class="userfield" style="position:relative; "> <a class="name" href="/id<?=$hide ? 0 : $c->user_id?>" style="font-weight: bold;"><?=$hide ? '' : $c->user->first_name.' '.$c->user->last_name?></a></div>
                        <div class="comment" style="position:relative;"><?=$hide ? '' : $c->text?></div>     
                <br>
                </div>   
        </div>
   <?}?>       
    </div>
    <input name="comment" onfocus="j.set_comment($(this));" type="text" placeholder="дискутировать" style="width:480px; margin-left:0px; margin-top:0px;" rows="8">       
                    
                
</div> 