<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-21 02:44:25 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 125 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-21 02:44:25 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-21 02:44:30 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 125 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-21 02:44:30 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(16): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:16
2013-03-21 04:12:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH/views/user/cabinet/tasks.php [ 23 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php:23
2013-03-21 04:12:29 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 23, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(24): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php:23
2013-03-21 04:12:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH/views/user/cabinet/tasks.php [ 23 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php:23
2013-03-21 04:12:33 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 23, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(24): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/tasks.php:23