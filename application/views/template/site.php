<!DOCTYPE html>
<head><meta http-equiv="Content-Type" content="text/html;
            charset=UTF-8">
    <meta charset="utf-8">
    <title>Карта Мира - социальная игра</title>

    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- 1000px plus breathing room -->
    <meta name="viewport" content="width=1040">
    <link media="all" rel="stylesheet" href="css/style.css">
     <link media="all" rel="stylesheet" href="css/bootstrap.css">
    <!-- Add jQuery library -->
   

  
   <?$pageUri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
$pageTitle = 'Карта Мира - социальная игра. Изменим мир вместе';?>
  <script type="text/javascript" src="lib/jquery-1.8.2.min.js"></script>

    <link rel='stylesheet' href='css/photos.css'>
    <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.2"></script>
    <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.2" media="screen" />
<script src="social.js" type="text/javascript"></script>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
		





                
      <script type="text/javascript" src="lib/jquery.js"></script>
    
     <script type="text/javascript">




          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-34966094-1']);
          _gaq.push(['_trackPageview']);




          (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();




    </script>

    


    



    

             

                

<body>

    <div id="wrapper" class="layout-logo">
        <script type="text/javascript">
                from_page = {pageuri : '<?=$pageUri?>'}
            </script>
        
             <div id="user-menu" >
                <div id="menu">
                <div class="logo_s">
                     <img src="img/logo_s.png"/>
</div>
                <ul id="links">
                 
                    <li><a href="#slideshow" class="user-links">Идея</a></li>
                    <li><a href="#card" class="user-links" >Ваша карта</a></li>
                    <li><a href="about.php"class="user-links" >О проекте</a></li>
                    <li><a href="photowall.php"class="user-links">Фотостена</a></li>
                   
                    <!--<li><a href="#blog" class="user-links">Новости</a></li>
                    <li><a href="#geography" class="user-links">География</a></li>
                    <li><a href="#video" class="user-links">Видео</a></li>
                    <li><a href="#contact" class="user-links">Связаться</a></li>-->
                    
                    
                    
                    <li><a href="http://pyramideofgood.com" style="margin-left:60px;"></a></li>
                </ul>
                <ul id="social">
                    
                </ul>
            </div>
            </div>
           <section id="buttons" class="info-section" style="height: 10px;">
               <div id="social_block">
              
                        <a id="vk_btn" href="http://vkontakte.ru/share.php?url=<?=urlencode($pageUri)?>" target="_blank" title="Сохранить Вконтакте">Поделиться Вконтакте </a>/

                                <a id="fb_btn" href="http://www.facebook.com/sharer.php?u=<?=urlencode($pageUri)?>&t=<?=urlencode($pageTitle)?>&src=sp" target="_blank" title="Мне нравится">Поделиться в Facebook</a>/

                                <a id="tw_btn" href="http://twitter.com/share?url=<?=urlencode($pageUri)?>&text=<?=urlencode($pageTitle)?>" target="_blank" title="Retweet">Твитнуть</a>/
           </div>
           </section>
       
        


        <section id="slideshow" class="info-section" style="margin-top:-40px;">
            
           
        
<div class="gallery">
                <a class="btn-prev disabled" href="#">prev</a>
                <a class="btn-next" href="#">next</a>
                <div style="width: 1000px; visibility: visible; position: relative; z-index: 2; left: 0px;" class="gmask">
                    <ul style="width: 4000px; left: 0px; margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1;">
                        <li style="width: 1000px; height: 400px; overflow: visible; float: left;" class="active">
                            <img src="img/first.jpg" alt="">
                        </li>
                        <li style="width: 1000px; height: 400px; overflow: visible; float: left;">
                            <img src="gallery/i/second.jpg" alt="">
                        </li>
                        <li style="width: 1000px; height: 400px; overflow: visible; float: left;">
                            <img src="gallery/i/third.jpg" alt="">
                        </li>
                        <li style="width: 1000px; height: 400px; overflow: visible; float: left;">
                            <img src="gallery/i/last.jpg" alt="">
                        </li>
                        <li style="width: 1000px; height: 400px; overflow: visible; float: left;">
                            <iframe width="1000" height="400" src="http://www.youtube.com/embed/61NCLByPgvk" frameborder="0" allowfullscreen></iframe>
                        </li>
                        
                    </ul>
                </div>
                <ul class="pagination">
                    <li><a class="active vis" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
		


        </section>



        

    <section id="card" class="info-section" style="height:auto;min-height:50px; padding-top:0;">
        
        <br>

        

        <?=1?>
        <!--#feed-->
    </section>
    <section id="news" class="info-section">
             <div class="span2" style="width:320px; height:auto; min-height:400px; background-color:#ccc;">
                 <div id="news" style="position:relative; width:100%;">
                     
                     <p style="padding-bottom:5px;"><a href="" style="font-weight:bold;" >Полицейский из Нью-Йорка обувший бездомного стал героем интернета</a></p>
                    <img src="img/news_p/nycop.jpg" width="100px"/> <p style="float:left; width:200px; margin-left: 10px;">В США пользователям Сети полюбился нью-йоркский полицейский, который обул босого бездомного на 42-й улице, пишет The New York Times.</p>
                 <hr>
                 </div>
                 
                 
                 <div id="news" style="position:relative; width:100%;" >
                     
                     <p style="padding-bottom:5px;"><a href="" style="font-weight:bold; text-align:center;" >Анонимный Санта-Клаус раздал деньги пострадавшим от "Сэнди"</a></p>
                    <img src="img/news_p/santa.jpg" width="100px"/> <p style="float:left; width:200px; margin-left: 10px;">В США мужчина в костюме Санта-Клауса подарил людям, пострадавшим от урагана "Сэнди", несколько тысяч долларов. Сам даритель денег не пожелал назвать свое имя и сохранил инкогнито</p>
                 
                 </div>
                 
             </div>
        <div class="span4" style="width:320px; height:auto; background-color:#ccc;">
                 </div>
        <div class="span6" style="width:300px; height:auto; background-color:#ccc;">
                 </div>

     
</section>
</div>

</body>
</html>