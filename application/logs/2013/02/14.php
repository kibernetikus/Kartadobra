<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-14 03:51:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: p ~ APPPATH/classes/Controller/Ajax/Public.php [ 27 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php:27
2013-02-14 03:51:20 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 27, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php:27
2013-02-14 04:07:11 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Ajax_Public' does not have a method 'username_available' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in :
2013-02-14 04:07:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/home/k/kiberne...', 377, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(33): Kohana_Validation->check()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-14 04:10:34 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Ajax_Public' does not have a method 'username_available' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in :
2013-02-14 04:10:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/home/k/kiberne...', 377, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(33): Kohana_Validation->check()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-14 05:14:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564
2013-02-14 05:14:19 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 1564, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(59): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564
2013-02-14 05:28:36 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php on line 23 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1846 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1846
2013-02-14 05:28:36 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 1846, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(23): Kohana_ORM->where('username', '')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1846
2013-02-14 05:50:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_org property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:699
2013-02-14 05:50:37 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('is_org', true)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(12): Kohana_ORM->__set('is_org', true)
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Settings))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:699
2013-02-14 05:58:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: is_org ~ APPPATH/views/user/cabinet/settings.php [ 12 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/settings.php:12
2013-02-14 05:58:39 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/settings.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 12, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php(23): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#11 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(16): Controller_Template_System->after()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Settings))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/settings.php:12
2013-02-14 06:04:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Ajax_User::$is_org ~ APPPATH/classes/Controller/Ajax/User.php [ 19 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:19
2013-02-14 06:04:54 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 19, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:19