<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-20 17:35:02 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/media.php [ 14 ] in /home/k/kibernetru/kartadobra/public_html/application/classes/media.php:14
2013-05-20 17:35:02 --- DEBUG: #0 /home/k/kibernetru/kartadobra/public_html/application/classes/media.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/k/kiberne...', 14, Array)
#1 /home/k/kibernetru/kartadobra/public_html/application/classes/media.php(10): media::get(NULL, '_default/fond/....')
#2 /home/k/kibernetru/kartadobra/public_html/application/views/user/team/info.php(37): media::user(Object(Model_User))
#3 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#4 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#5 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/k/kibernetru/kartadobra/public_html/application/views/public/template.php(41): Kohana_View->__toString()
#7 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/View.php(61): include('/home/k/kiberne...')
#8 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/k/kiberne...', Array)
#9 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Template/System.php(27): Kohana_View->render()
#10 /home/k/kibernetru/kartadobra/public_html/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#11 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Team))
#14 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/k/kibernetru/kartadobra/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/k/kibernetru/kartadobra/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /home/k/kibernetru/kartadobra/public_html/application/classes/media.php:14