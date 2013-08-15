<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-26 11:26:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564
2013-01-26 11:26:26 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 1564, Array)
#1 /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php(162): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564