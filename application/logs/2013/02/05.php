<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-05 11:49:06 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Public_Tasks::__call(), called in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php on line 78 and defined ~ APPPATH/classes/Controller/Public/Tasks.php [ 22 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:22
2013-02-05 11:49:06 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 22, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_Public_Tasks->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:22
2013-02-05 11:51:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Public_Tasks::$action ~ APPPATH/classes/Controller/Public/Tasks.php [ 24 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:24
2013-02-05 11:51:40 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 24, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_Public_Tasks->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:24
2013-02-05 11:57:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/public/template.php [ 46 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:46
2013-02-05 11:57:14 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 46, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:46
2013-02-05 12:01:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Public_Tasks::$_action ~ APPPATH/classes/Controller/Public/Tasks.php [ 24 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:24
2013-02-05 12:01:08 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 24, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_Public_Tasks->__call()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php:24