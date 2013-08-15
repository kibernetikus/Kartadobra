<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-10 03:52:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Public_Template' not found ~ APPPATH/classes/Controller/Public/Welcome.php [ 3 ] in :
2013-01-10 03:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 03:52:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Public__Template' not found ~ APPPATH/classes/Controller/Public/Welcome.php [ 3 ] in :
2013-01-10 03:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 03:53:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php:137
2013-01-10 03:53:10 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php:137
2013-01-10 03:55:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_System' not found ~ APPPATH/classes/Controller/Template/Public.php [ 3 ] in :
2013-01-10 03:55:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 04:04:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Ajax_A::$auto_render ~ APPPATH/classes/Controller/Template/System.php [ 7 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php:7
2013-01-10 04:04:49 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 7, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(69): Controller_Template_System->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_A))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php:7
2013-01-10 04:04:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Public_Welcome::$auto_render ~ APPPATH/classes/Controller/Template/System.php [ 7 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php:7
2013-01-10 04:04:56 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/k/kiberne...', 7, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(69): Controller_Template_System->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php:7
2013-01-10 04:11:08 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php:67
2013-01-10 04:11:08 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /home/k/kibernetru/kohana/public_html/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php:67
2013-01-10 04:15:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php:67
2013-01-10 04:15:52 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /home/k/kibernetru/kohana/public_html/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php:67
2013-01-10 04:15:53 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php:67
2013-01-10 04:15:53 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /home/k/kibernetru/kohana/public_html/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Cookie.php:67
2013-01-10 04:20:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view public/welcome/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php:137
2013-01-10 04:20:29 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('public/welcome/...')
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('public/welcome/...', NULL)
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Welcome.php(7): Kohana_View::factory('public/welcome/...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(84): Controller_Public_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php:137
2013-01-10 04:23:12 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:23:12 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(294): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:23:25 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:23:25 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(294): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:27:30 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:27:30 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(293): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:36:28 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:36:28 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(293): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:37:02 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:37:02 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(293): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:38:25 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 04:38:25 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(293): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 05:17:03 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 29 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 05:17:03 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 29, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(29): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(293): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:29
2013-01-10 06:15:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/public/template.php [ 237 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:237
2013-01-10 06:15:17 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(237): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 237, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_A))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:237
2013-01-10 06:18:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pageUri ~ APPPATH/views/public/welcome/index.php [ 4 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:4
2013-01-10 06:18:36 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 4, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(237): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:4
2013-01-10 06:19:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pageTitle ~ APPPATH/views/public/welcome/index.php [ 6 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:6
2013-01-10 06:19:49 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 6, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(237): Kohana_View->__toString()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:6
2013-01-10 06:20:15 --- EMERGENCY: ErrorException [ 2 ]: include(templates/history.tpl) [function.include]: failed to open stream: No such file or directory ~ APPPATH/views/public/welcome/index.php [ 87 ] in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:87
2013-01-10 06:20:15 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(87): Kohana_Core::error_handler(2, 'include(templat...', '/home/k/kiberne...', 87, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php(87): include()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(237): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/welcome/index.php:87
2013-01-10 06:21:13 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/public/welcome/index.php [ 99 ] in :
2013-01-10 06:21:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 06:55:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pageUri ~ APPPATH/views/public/template.php [ 20 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:20
2013-01-10 06:55:42 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 20, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Welcome))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:20
2013-01-10 22:38:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php:114
2013-01-10 22:38:33 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#3 {main} in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php:114
2013-01-10 23:03:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH/views/public/welcome/index.php [ 13 ] in :
2013-01-10 23:03:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 23:20:58 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kibernetru_karta.ulogins' doesn't exist [ SHOW FULL COLUMNS FROM `ulogins` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-10 23:20:58 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('ulogins')
#2 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php(109): Kohana_ORM::factory('ulogin', Array)
#7 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(14): Kohana_Ulogin->login()
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(88): Controller_Public_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-10 23:31:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-10 23:31:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 23:39:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-10 23:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-10 23:45:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 109 ] in /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php:109
2013-01-10 23:45:20 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php(109): Kohana_Core::error_handler(8, 'Undefined index...', '/home/k/kiberne...', 109, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(14): Kohana_Ulogin->login()
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(88): Controller_Public_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php:109
2013-01-10 23:48:22 --- EMERGENCY: Kohana_Exception [ 0 ]: token expired ~ MODPATH/ulogin/classes/Kohana/Ulogin.php [ 108 ] in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:14
2013-01-10 23:48:22 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(14): Kohana_Ulogin->login()
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(88): Controller_Public_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php:14
2013-01-10 23:48:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-01-10 23:48:55 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('cf8ea9508e54cd5...')
#1 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'cf8ea9508e54cd5...')
#3 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'cf8ea9508e54cd5...')
#4 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'cf8ea9508e54cd5...')
#5 /home/k/kibernetru/kohana/public_html/modules/ulogin/classes/Kohana/Ulogin.php(143): Kohana_ORM->values(Array)
#6 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Login.php(14): Kohana_Ulogin->login()
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(88): Controller_Public_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-01-10 23:49:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/public/template.php [ 44 ] in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:44
2013-01-10 23:49:49 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/k/kiberne...', 44, Array)
#1 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(17): Kohana_View->render()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Login))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/application/views/public/template.php:44
2013-01-10 23:59:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Template/Public.php [ 10 ] in :
2013-01-10 23:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :