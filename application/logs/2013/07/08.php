<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-08 12:56:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The socail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php:600
2013-07-08 12:56:02 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('socail')
#1 /Applications/XAMPP/xamppfiles/htdocs/application/views/user/cabinet/index.php(10): Kohana_ORM->__get('socail')
#2 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(61): include('/Applications/X...')
#3 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/X...', Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/XAMPP/xamppfiles/htdocs/application/views/user/cabinet/template.php(41): Kohana_View->__toString()
#6 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(61): include('/Applications/X...')
#7 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Applications/XAMPP/xamppfiles/htdocs/application/views/public/template.php(25): Kohana_View->__toString()
#10 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(61): include('/Applications/X...')
#11 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/X...', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/Template/System.php(27): Kohana_View->render()
#13 /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/Template/User.php(17): Controller_Template_System->after()
#14 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Controller.php(91): Controller_Template_User->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Cabinet))
#17 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/index.php(118): Kohana_Request->execute()
#20 {main} in /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php:600