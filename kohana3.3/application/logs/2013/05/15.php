<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-15 04:34:13 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-15 04:34:13 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('WRUID', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('WRUID')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-15 06:28:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 06:28:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:38:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH\classes\Controller\Welcome.php [ 22 ] in :
2013-05-15 06:38:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 06:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:59 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant email - assumed 'email' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php:10
2013-05-15 06:48:59 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(10): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\koh...', 10, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php:10
2013-05-15 06:50:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::add_rule() ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in :
2013-05-15 06:50:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:50:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in :
2013-05-15 06:50:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:52:23 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Welcome.php [ 25 ] in C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php:25
2013-05-15 06:52:23 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(25): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\koh...', 25, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php:25
2013-05-15 07:11:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:11:19 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:11:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:11:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:11:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:11:36 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:11:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:11:41 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:14:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$array' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in :
2013-05-15 07:14:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:14:47 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:14:47 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:15:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:15:41 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:15:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:15:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:19:09 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:19:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:19:45 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:19:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:20:27 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:20:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:21:39 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:21:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:23:59 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:23:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:24:14 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-15 07:24:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:24:48 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php:9
2013-05-15 07:24:48 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\koh...', 9, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php:9
2013-05-15 07:38:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:38:52 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\user.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:38:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\user.php [ 35 ] in :
2013-05-15 07:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:40:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:40:12 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\user.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:40:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\user.php [ 35 ] in :
2013-05-15 07:40:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:44:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:27 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:39 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:43 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 3 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:44:49 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:3
2013-05-15 07:54:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\user\register.php [ 7 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:7
2013-05-15 07:54:17 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 7, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:7
2013-05-15 07:54:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting ',' or ';' ~ APPPATH\views\user\register.php [ 2 ] in :
2013-05-15 07:54:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:15:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: links ~ APPPATH\views\welcome_content.php [ 12 ] in C:\wamp\www\kohana3.3\application\views\welcome_content.php:12
2013-05-15 08:15:12 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\welcome_content.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 12, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\welcome_content.php:12
2013-05-15 08:15:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: links ~ APPPATH\views\welcome_content.php [ 12 ] in C:\wamp\www\kohana3.3\application\views\welcome_content.php:12
2013-05-15 08:15:15 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\welcome_content.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 12, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(12): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\kohana3.3\application\views\welcome_content.php:12