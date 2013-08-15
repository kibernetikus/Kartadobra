<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-05 06:09:35 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php:1299
2013-07-05 06:09:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/application/classes/Controller/Ajax/Public.php(100): Kohana_ORM->save()
#3 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Controller.php(87): Controller_Ajax_Public->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Public))
#6 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/modules/orm/classes/Kohana/ORM.php:1299