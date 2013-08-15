<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-16 12:44:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: is_org ~ APPPATH/classes/Controller/Ajax/User.php [ 17 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:17
2013-02-16 12:44:16 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 17, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_closetask()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:17
2013-02-16 12:45:14 --- EMERGENCY: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Ajax/User.php [ 19 ] in :
2013-02-16 12:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/home/k/kiberne...', 19, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(19): preg_replace('\D', '', '1')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_closetask()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-02-16 12:45:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: users ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564
2013-02-16 12:45:57 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 1564, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(21): Kohana_ORM->add('users', Object(Model_User))
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_closetask()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564