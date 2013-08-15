<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-01 03:20:16 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/other/index.php [ 34 ] in :
2013-02-01 03:20:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 03:21:15 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/other/index.php [ 34 ] in :
2013-02-01 03:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 03:21:41 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/other/index.php [ 34 ] in :
2013-02-01 03:21:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 03:25:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar_small property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-01 03:25:05 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar_small')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php(31): Kohana_ORM->__get('avatar_small')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-01 03:25:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The small_avatar property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-01 03:25:22 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('small_avatar')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php(31): Kohana_ORM->__get('small_avatar')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-01 03:37:12 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant city - assumed 'city' ~ APPPATH/views/user/other/index.php [ 50 ] in /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php:50
2013-02-01 03:37:12 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/k/kiberne...', 50, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php:50
2013-02-01 05:29:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH/classes/media.php [ 6 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:6
2013-02-01 05:29:31 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 6, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php(8): media::get('0')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/classes/media.php:6
2013-02-01 06:20:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_City' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-02-01 06:20:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 06:21:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g ~ APPPATH/classes/Controller/Ajax/Public.php [ 8 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php:8
2013-02-01 06:21:39 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 8, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_cities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php:8
2013-02-01 06:23:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-01 06:23:23 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('id')
#1 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Result.php(157): Kohana_ORM->__get('id')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/Public.php(8): Kohana_Database_Result->as_array('id', 'name')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_cities()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-01 07:40:05 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/user/cabinet/settings.php [ 11 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/settings.php:11
2013-02-01 07:40:05 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/settings.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 11, Array)
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
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Settings))
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#18 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/settings.php:11
2013-02-01 08:47:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The city_id property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:699
2013-02-01 08:47:44 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('city_id', '4400')
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(44): Kohana_ORM->__set('city_id', '4400')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addtask()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:699