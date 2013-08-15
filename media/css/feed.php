 <section id="story" class="info-section">

<div>
                            <div style="width:485px; margin-top:10px; padding:5px;">
                                <div id="loadpage" style="display:none;"></div>
                                <div id="popUpDiv" style="display:none;"> 
                                    <a href="javascript:;" onclick="popup('popUpDiv')"><img border="0" src="hide.png" alt="Закрыть" title="Закрыть" /></a> 
                                    <div>
                                        <span></span>
                                        <div id="comment_part"></div>
                                    </div>

                                </div>
                                <script>
                                    //showCommentBox
                                    $('a.showCommentBox').livequery("click", function(e){

                                        var getpID =  $(this).attr('id').replace('post_id','');	
                                        //$('.commentBox').hide();

                                        $("#commentBox-"+getpID).css('display','');
                                        $("#commentMark-"+getpID).focus();
                                        $("#commentBox-"+getpID).children("img.CommentImg").show();			
                                        //$("#commentBox-"+getpID).children("a#SubmitComment").show();		
                                    });	

                                </script>
    </section>

