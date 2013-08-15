<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-11 00:02:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/classes/Controller/Template/Public.php [ 10 ] in :
2013-01-11 00:02:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 00:12:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Public_Cabinet ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php:114
2013-01-11 00:12:26 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#3 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php:114
2013-01-11 00:12:57 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User_Cabinet::__call(), called in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php on line 78 and defined ~ APPPATH/classes/Controller/User/Cabinet.php [ 10 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:10
2013-01-11 00:12:57 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 10, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_User_Cabinet->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:10
2013-01-11 00:16:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Template/System.php [ 19 ] in :
2013-01-11 00:16:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 00:17:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Template/System.php [ 19 ] in :
2013-01-11 00:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 00:18:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Template/System.php [ 19 ] in :
2013-01-11 00:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 00:18:37 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User_Cabinet::__call(), called in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php on line 78 and defined ~ APPPATH/classes/Controller/User/Cabinet.php [ 10 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:10
2013-01-11 00:18:37 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 10, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_User_Cabinet->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:10
2013-01-11 00:19:54 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User_Cabinet::__call(), called in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php on line 78 and defined ~ APPPATH/classes/Controller/User/Cabinet.php [ 15 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:15
2013-01-11 00:19:54 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 15, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_User_Cabinet->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:15
2013-01-11 00:20:06 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User_Cabinet::__call(), called in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php on line 78 and defined ~ APPPATH/classes/Controller/User/Cabinet.php [ 15 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:15
2013-01-11 00:20:06 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 15, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_User_Cabinet->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:15
2013-01-11 00:20:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User_Cabinet::action_bebe(), called in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php on line 87 and defined ~ APPPATH/classes/Controller/User/Cabinet.php [ 10 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:10
2013-01-11 00:20:23 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 10, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_User_Cabinet->action_bebe()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:10
2013-01-11 00:23:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/User/Cabinet.php [ 12 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:12
2013-01-11 00:23:07 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 12, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_User_Cabinet->action_bebe()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:12
2013-01-11 00:27:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Template/System.php [ 19 ] in :
2013-01-11 00:27:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 00:36:40 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User/Cabinet.php [ 8 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:8
2013-01-11 00:36:40 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/k/kiberne...', 8, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_User_Cabinet->action_info()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/User/Cabinet.php:8
2013-01-11 00:38:14 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/cabinet/index.php [ 9 ] in :
2013-01-11 00:38:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 00:39:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The city property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:39:02 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('city')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(15): Kohana_ORM->__get('city')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:47:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:47:49 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(42): Kohana_ORM->__get('name')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:48:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:48:28 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(42): Kohana_ORM->__get('name')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:48:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:48:53 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(42): Kohana_ORM->__get('name')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 00:54:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/public/template.php [ 44 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:44
2013-01-11 00:54:20 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 44, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:44
2013-01-11 00:54:41 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 108 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-01-11 00:54:41 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-01-11 01:01:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 01:01:02 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(42): Kohana_ORM->__get('name')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 01:30:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 01:30:31 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('photo')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(7): Kohana_ORM->__get('photo')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 01:49:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: avatar_small ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 157 ] in /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php:157
2013-01-11 01:49:30 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php(157): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 157, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php:157