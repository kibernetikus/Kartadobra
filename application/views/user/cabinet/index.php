<link rel="stylesheet" type="text/css" href="/media/js/jquery.autocomplete.css" />
<style>
    #files img {margin:5px;}
</style>
<div id="middle" class="row" style="margin-left:0; margin-top:20px;">
    <div class="span8" style="background:#0EB2CC;  ">
       <?if(!$is_org){?>
    <!-- Бэйджики -->
  <?=blocks::honors($u)?>      
    <!--/бэйджики-->
<?}?>
            <!--Карты мира-->
            <?=blocks::cards($u, TRUE)?>

                <!--Блог-->
               <h3 style="color:#000000; font-weight:300; ">Блог</h3><br>
                
                <?=blocks::blogs($u, TRUE)?>
                <!--конец блога-->
    </div>

    <div class="span4" style="background:#1ABC9C; ">




    
   

     </div>
    </div>
        
     
    