<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Карта Мира - социальная игра</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link media="all" rel="stylesheet" href="/media/css/style.css">
        <link media="all" rel="stylesheet" href="/media/css/<?= strtolower($controller) ?>.css">
        <link media="all" rel="stylesheet" href="/media/css/bootstrap.css">
        <link media="all" rel="stylesheet" href="/media/css/flat-ui.css">
        <link media="all" rel="stylesheet" href="/media/css/elusive-webfont.css">
        <link rel="stylesheet" href="/media/css/photos.css">       
        <script type="text/javascript" src="/media/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="/media/js/j.js"></script>
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/99cbd793-fafd-4e9e-8d3b-c11a1f66ac39.css">
        <script type="text/javascript" src="/media/js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    </head>
    <body>

      
        <?= $content ?>

        



        <div id="feedback" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Обратная связь с авторами</h3>
            </div>
            <div class="modal-body">
                <h5>Помогите нам стать лучше, предложения и жалобы</h5>
                <hr>
                <form id="feedback-form"   method="POST"> 
                    <div class="control-group">
                        <legend class="control-label">Скажи свое имя или вставь ссылку на свою страницу</legend>
                        <div class="controls">
                            <input type="text" autofocus="autofocus" id="f_name" name="title" placeholder="" maxlength="50" style="width:360px; " data-toggle="tooltip" title="Например kartadobra.ru/id3 или Вася" acement="right"><br>
                        </div>
                    </div>
                    <div class="control-group">
                        <legend class="control-label">Как с тобой связаться, друг?</legend>
                        <div class="controls">
                            <input type="text" autofocus="autofocus" id="f_email" name="title" placeholder="" maxlength="50" style="width:360px; " data-toggle="tooltip" title="Укажите что-нибудь, например: номер телефона, электропочту, Skype, мы вам обязательно напишем и поблагодарим" data-placement="right"><br>
                        </div>
                    </div>
                    <div class="control-group">
                        <legend class="control-label">Рассказывай, что случилось?</legend>
                        <div class="controls">
                            <textarea style="width:360px; height:90px;" id="f_text" data-toggle="tooltip" title="Напишите что-нибудь нам, например: 'не могу создать просьбу' или 'Карте Мира необходима такая функция' " data-placement="right" > </textarea><br>
                        </div>
                    </div> 
                    <button class="btn btn-info" id="setcontact" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </body>
</html>