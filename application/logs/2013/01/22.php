<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-22 03:40:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hs ~ APPPATH/classes/Controller/Public/Tasks.php [ 9 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:9
2013-01-22 03:40:16 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 9, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Tasks->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:9
2013-01-22 03:46:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Tasks::json_safe_encode() ~ APPPATH/classes/Controller/Template/System.php [ 22 ] in :
2013-01-22 03:46:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 04:03:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/user/cabinet/tasks.php [ 199 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php:199
2013-01-22 04:03:24 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php(199): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 199, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(22): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php:199