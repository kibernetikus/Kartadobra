<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-21 03:21:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Cabinet::set_info() ~ APPPATH/classes/Controller/User/Cabinet.php [ 21 ] in :
2013-05-21 03:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-21 03:22:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Cabinet::set_info() ~ APPPATH/classes/Controller/User/Cabinet.php [ 21 ] in :
2013-05-21 03:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-21 11:42:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 149 ] in /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php:17
2013-05-21 11:42:38 --- DEBUG: #0 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php(17): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kartadobra/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php:17
2013-05-21 13:10:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 149 ] in /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php:17
2013-05-21 13:10:07 --- DEBUG: #0 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php(17): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kartadobra/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Public/Login.php:17