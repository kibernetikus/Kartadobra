<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-25 07:42:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/media.php [ 13 ] in :
2013-01-25 07:42:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 07:43:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_media' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-25 07:43:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 07:43:55 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kibernetru_karta.media' doesn't exist [ SHOW FULL COLUMNS FROM `media` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-25 07:43:55 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('media')
#2 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/k/kibernetru/kohana/public_html/application/classes/media.php(14): Kohana_ORM::factory('Media')
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(13): media::add('/tmp/phpgRfzR6', 2)
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_upload()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-25 07:44:27 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method media::test_and_set_dir() should not be called statically ~ APPPATH/classes/media.php [ 21 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:21
2013-01-25 07:44:27 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/k/kiberne...', 21, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/media.php(21): media::test_and_set_dir()
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(13): media::add('/tmp/phpQiFg1k', 2)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/application/classes/media.php:21
2013-01-25 07:49:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH/views/public/template.php [ 13 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:13
2013-01-25 07:49:17 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 13, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:13
2013-01-25 07:52:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH/views/public/template.php [ 13 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:13
2013-01-25 07:52:47 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 13, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:13
2013-01-25 10:26:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: g ~ APPPATH/classes/Controller/Ajax/User.php [ 25 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:25
2013-01-25 10:26:12 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 25, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addtask()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:25
2013-01-25 10:27:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: media_id ~ APPPATH/classes/Controller/Ajax/User.php [ 26 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:26
2013-01-25 10:27:40 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 26, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addtask()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php:26
2013-01-25 10:28:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564
2013-01-25 10:28:18 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 1564, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(31): Kohana_ORM->add('media', '22')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addtask()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1564
2013-01-25 10:37:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'utf8' not found ~ APPPATH/classes/text.php [ 26 ] in :
2013-01-25 10:37:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :