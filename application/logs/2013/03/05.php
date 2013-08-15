<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-05 05:13:44 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Session.php:125
2013-03-05 05:13:44 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-03-05 05:22:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar_mini property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-05 05:22:58 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar_mini')
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(210): Kohana_ORM->__get('avatar_mini')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addcomment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-05 05:47:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar_mini property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-05 05:47:07 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar_mini')
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(210): Kohana_ORM->__get('avatar_mini')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addcomment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600