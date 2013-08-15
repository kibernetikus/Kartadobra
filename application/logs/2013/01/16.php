<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-16 03:45:55 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/cabinet/index.php [ 12 ] in :
2013-01-16 03:45:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 03:46:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The avater_orig property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-16 03:46:54 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avater_orig')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(9): Kohana_ORM->__get('avater_orig')
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
2013-01-16 03:47:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The avater_orig property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-01-16 03:47:06 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avater_orig')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/index.php(9): Kohana_ORM->__get('avater_orig')
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
2013-01-16 04:00:14 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Session.php:125
2013-01-16 04:00:14 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(10): Kohana_Session::instance()
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(9): Controller_Template_System->before()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Session.php:125
2013-01-16 04:28:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_blog' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-16 04:28:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 04:28:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Blog' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-16 04:28:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 04:42:32 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/cabinet/index.php [ 197 ] in :
2013-01-16 04:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 05:06:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function emptty() ~ APPPATH/classes/Controller/Ajax/User.php [ 22 ] in :
2013-01-16 05:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 05:07:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_blog' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-16 05:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 05:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/public/template.php [ 45 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:45
2013-01-16 05:25:17 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 45, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:45
2013-01-16 05:25:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/public/template.php [ 45 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:45
2013-01-16 05:25:37 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 45, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(19): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:45