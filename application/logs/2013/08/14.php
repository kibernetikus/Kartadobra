<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-14 03:09:36 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User/Fond.php [ 9 ] in /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/User/Fond.php:9
2013-08-14 03:09:36 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/User/Fond.php(9): Kohana_Core::error_handler(2, 'Creating defaul...', '/Applications/X...', 9, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Controller.php(87): Controller_User_Fond->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Fond))
#4 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/User/Fond.php:9
2013-08-14 03:26:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Public_Fond::$template ~ APPPATH/classes/Controller/Template/System.php [ 8 ] in /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/Template/System.php:8
2013-08-14 03:26:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/Template/System.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 8, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Controller.php(69): Controller_Template_System->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Fond))
#4 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/Template/System.php:8