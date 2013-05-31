<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-20 07:18:54 --- CRITICAL: View_Exception [ 0 ]: The requested view welcom_content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-20 07:18:54 --- DEBUG: #0 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcom_content')
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_View->__construct('welcom_content')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-20 08:04:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\user\register.php [ 7 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:7
2013-05-20 08:04:58 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 7, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:7
2013-05-20 08:17:35 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-20 08:17:35 --- DEBUG: #0 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137