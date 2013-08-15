<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-06 05:58:40 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `cards` (`id`) VALUES ('-999999') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-04-06 05:58:40 --- DEBUG: #0 /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#1 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/k/kibernetru/kohana/public_html/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/k/kibernetru/kohana/public_html/application/classes/Controller/Ajax/User.php(216): Kohana_ORM->save()
#4 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Controller.php(87): Controller_Ajax_User->action_addcard()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#7 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/k/kibernetru/kohana/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/k/kibernetru/kohana/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/k/kibernetru/kohana/public_html/modules/database/classes/Kohana/Database/Query.php:251