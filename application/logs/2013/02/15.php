<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-15 11:32:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Fond' not found ~ APPPATH/classes/Controller/User/Fond.php [ 3 ] in :
2013-02-15 11:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 11:32:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hcontent ~ APPPATH/views/user/cabinet/template.php [ 23 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php:23
2013-02-15 11:32:50 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 23, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Fond))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php:23
2013-02-15 11:34:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hcontent ~ APPPATH/views/user/cabinet/template.php [ 23 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php:23
2013-02-15 11:34:58 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 23, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Fond))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php:23
2013-02-15 11:35:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hcontent ~ APPPATH/views/user/cabinet/template.php [ 23 ] in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php:23
2013-02-15 11:35:18 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 23, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Fond))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php:23