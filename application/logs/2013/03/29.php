<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-29 13:28:42 --- EMERGENCY: ErrorException [ 8 ]: iconv() [function.iconv]: Detected an illegal character in input string ~ APPPATH/classes/text.php [ 41 ] in :
2013-03-29 13:28:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', '/home/k/kiberne...', 41, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/text.php(41): iconv('utf-8', 'cp1251', '???????????????...')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(245): text::accepte('???????????????...', 10000)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_blogadd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-29 13:28:48 --- EMERGENCY: ErrorException [ 8 ]: iconv() [function.iconv]: Detected an illegal character in input string ~ APPPATH/classes/text.php [ 41 ] in :
2013-03-29 13:28:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', '/home/k/kiberne...', 41, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/text.php(41): iconv('utf-8', 'cp1251', '???????????????...')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(245): text::accepte('???????????????...', 10000)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_blogadd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-29 13:44:50 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 14 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:14
2013-03-29 13:44:50 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 14, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/media.php(10): media::get(NULL, '_default/fond/....')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(239): media::user(Object(Model_User))
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_getaction()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/application/classes/media.php:14
2013-03-29 13:44:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 14 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:14
2013-03-29 13:44:55 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 14, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/media.php(10): media::get(NULL, '_default/fond/....')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(239): media::user(Object(Model_User))
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_getaction()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/application/classes/media.php:14
2013-03-29 14:10:01 --- EMERGENCY: ErrorException [ 8 ]: iconv() [function.iconv]: Detected an illegal character in input string ~ APPPATH/classes/text.php [ 41 ] in :
2013-03-29 14:10:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', '/home/k/kiberne...', 41, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/text.php(41): iconv('utf-8', 'cp1251', '????????????')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(245): text::accepte('????????????', 10000)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_blogadd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-29 14:12:44 --- EMERGENCY: ErrorException [ 8 ]: iconv() [function.iconv]: Detected an illegal character in input string ~ APPPATH/classes/text.php [ 41 ] in :
2013-03-29 14:12:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', '/home/k/kiberne...', 41, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/text.php(41): iconv('utf-8', 'cp1251', '????????????')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(245): text::accepte('????????????', 10000)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_blogadd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-29 14:20:40 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 125 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-29 14:20:40 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-29 14:20:45 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 125 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-29 14:20:45 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16