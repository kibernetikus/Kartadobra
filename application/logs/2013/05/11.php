<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-11 12:26:41 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 14 ] in /home/k/kibernetru/kartadobra/public_html/application/classes/media.php:14
2013-05-11 12:26:41 --- DEBUG: #0 /home/k/kibernetru/kartadobra/public_html/application/classes/media.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 14, Array)
#1 /home/k/kibernetru/kartadobra/public_html/application/classes/media.php(10): media::get(NULL, '_default/fond/....')
#2 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Ajax/User.php(239): media::user(Object(Model_User))
#3 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_getaction()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kartadobra/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kartadobra/public_html/application/classes/media.php:14
2013-05-11 12:26:47 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 14 ] in /home/k/kibernetru/kartadobra/public_html/application/classes/media.php:14
2013-05-11 12:26:47 --- DEBUG: #0 /home/k/kibernetru/kartadobra/public_html/application/classes/media.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 14, Array)
#1 /home/k/kibernetru/kartadobra/public_html/application/classes/media.php(10): media::get(NULL, '_default/fond/....')
#2 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Ajax/User.php(239): media::user(Object(Model_User))
#3 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_getaction()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kartadobra/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kartadobra/public_html/application/classes/media.php:14