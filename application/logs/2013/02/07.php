<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-07 15:31:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Cabinet::set_info() ~ APPPATH/classes/Controller/User/Cabinet.php [ 24 ] in :
2013-02-07 15:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-07 15:48:56 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 6 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:6
2013-02-07 15:48:56 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 6, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php(180): media::get('http://cs319831...')
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
2013-02-07 15:50:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-07 15:50:44 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/task.php(6): Kohana_ORM->__get('user')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(22): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-07 15:51:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-07 15:51:26 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/task.php(6): Kohana_ORM->__get('user')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/k/kibernetru/kohana/public_html/application/views/user/cabinet/template.php(23): Kohana_View->__toString()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /home/k/kibernetru/kohana/public_html/application/views/public/template.php(46): Kohana_View->__toString()
#10 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#11 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#12 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Template/System.php(25): Kohana_View->render()
#13 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_System->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#16 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#19 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-02-07 15:53:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 6 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:6
2013-02-07 15:53:18 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 6, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php(180): media::get('http://cs319831...')
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
2013-02-07 15:57:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php on line 38 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1846 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1846
2013-02-07 15:57:21 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/k/kiberne...', 1846, Array)
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php(38): Kohana_ORM->where('region_id', '4861')
#2 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Public/Tasks.php(55): Controller_Public_Tasks->task('2')
#3 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(78): Controller_Public_Tasks->__call()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Tasks))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:1846
2013-02-07 16:02:58 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 6 ] in /home/k/kibernetru/kohana/public_html/application/classes/media.php:6
2013-02-07 16:02:58 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/application/classes/media.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 6, Array)
#1 /home/k/kibernetru/kohana/public_html/application/views/user/other/index.php(180): media::get('')
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