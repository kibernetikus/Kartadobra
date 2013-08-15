<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 04:39:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar_mini property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-19 04:39:19 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar_mini')
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(294): Kohana_ORM->__get('avatar_mini')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addcomment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-19 04:39:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar_mini property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-19 04:39:34 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar_mini')
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(294): Kohana_ORM->__get('avatar_mini')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addcomment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-19 06:11:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar_mini property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-19 06:11:36 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar_mini')
#1 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(294): Kohana_ORM->__get('avatar_mini')
#2 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addcomment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#5 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-03-19 10:28:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Cabinet::set_info() ~ APPPATH/classes/Controller/User/Cabinet.php [ 21 ] in :
2013-03-19 10:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 10:29:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Cabinet::set_info() ~ APPPATH/classes/Controller/User/Cabinet.php [ 21 ] in :
2013-03-19 10:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 10:29:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Public_Cabinet::set_info() ~ APPPATH/classes/Controller/User/Cabinet.php [ 21 ] in :
2013-03-19 10:29:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 10:29:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: /tmp/phpivcbeW ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/k/kibernetru/kohana/public_html/modules/image/classes/Kohana/Image/GD.php:91
2013-03-19 10:29:46 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/tmp/phpivcbeW')
#1 /home/k/kibernetru/kohana/public_html/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/tmp/phpivcbeW')
#2 /home/k/kibernetru/kohana/public_html/application/classes/media.php(27): Kohana_Image::factory('/tmp/phpivcbeW')
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(165): media::add('/tmp/phpivcbeW', NULL, Array)
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_media()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/modules/image/classes/Kohana/Image/GD.php:91