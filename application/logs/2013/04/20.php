<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-20 09:49:55 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 125 ] in /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php:17
2013-04-20 09:49:55 --- DEBUG: #0 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php(17): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kartadobra/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php:17