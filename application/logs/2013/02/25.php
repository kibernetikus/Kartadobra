<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-25 13:23:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH/views/user/cabinet/feed.php [ 27 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:27
2013-02-25 13:23:12 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 27, Array)
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
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:27
2013-02-25 13:30:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH/views/user/cabinet/feed.php [ 27 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:27
2013-02-25 13:30:46 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 27, Array)
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
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:27
2013-02-25 13:36:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_blog' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-02-25 13:36:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-25 13:36:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'User:region_id' in 'where clause' [ SELECT `blog`.`id` AS `id`, `blog`.`user_id` AS `user_id`, `blog`.`text` AS `text`, `blog`.`date` AS `date` FROM `blogs` AS `blog` WHERE `User:region_id` = '4861' ORDER BY `id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-02-25 13:36:48 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blog`.`...', 'Model_Blog', Array)
#1 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Feed.php(9): Kohana_ORM->find_all()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Feed->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-02-25 13:48:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'User:region_id' in 'where clause' [ SELECT `blog`.`id` AS `id`, `blog`.`user_id` AS `user_id`, `blog`.`text` AS `text`, `blog`.`date` AS `date` FROM `blogs` AS `blog` WHERE `User:region_id` = '4861' ORDER BY `id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-02-25 13:48:03 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blog`.`...', 'Model_Blog', Array)
#1 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Feed.php(9): Kohana_ORM->find_all()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Feed->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-02-25 13:48:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function on() on a non-object ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Select.php [ 138 ] in :
2013-02-25 13:48:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-25 13:58:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Public/Feed.php [ 9 ] in :
2013-02-25 13:58:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-25 13:58:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Public/Feed.php [ 9 ] in :
2013-02-25 13:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-25 14:00:26 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id' in order clause is ambiguous [ SELECT * FROM `blogs` LEFT JOIN `users` ON (`users`.`id` = `blogs`.`user_id`) ORDER BY `id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-02-25 14:00:26 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Feed.php(9): Kohana_Database_Query->execute()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Feed->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-02-25 14:01:05 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/user/cabinet/feed.php [ 28 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:28
2013-02-25 14:01:05 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 28, Array)
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
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:28
2013-02-25 14:03:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$user ~ APPPATH/views/user/cabinet/feed.php [ 30 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:30
2013-02-25 14:03:58 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php(30): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 30, Array)
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
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:30
2013-02-25 14:04:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$user ~ APPPATH/views/user/cabinet/feed.php [ 35 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:35
2013-02-25 14:04:42 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 35, Array)
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
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Feed))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/feed.php:35