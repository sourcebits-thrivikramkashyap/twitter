<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-22 00:02:11 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-22 00:02:11 --- DEBUG: #0 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-22 00:03:20 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-22 00:03:20 --- DEBUG: #0 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana3.3\system\classes\Kohana\View.php:137
2013-05-22 00:07:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 4 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:4
2013-05-22 00:07:46 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\application\views\welcome_content.php(10): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:4
2013-05-22 00:12:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in :
2013-05-22 00:12:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 00:13:12 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in :
2013-05-22 00:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 00:46:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function uri() on a non-object ~ SYSPATH\classes\Kohana\Form.php [ 36 ] in :
2013-05-22 00:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 00:55:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\user.php [ 12 ] in C:\wamp\www\kohana3.3\application\classes\Controller\user.php:12
2013-05-22 00:55:04 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\user.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 12, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\user.php:12
2013-05-22 01:01:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 4 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:4
2013-05-22 01:01:12 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
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
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:4
2013-05-22 01:01:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\user.php [ 35 ] in :
2013-05-22 01:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 01:01:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\register.php [ 4 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:4
2013-05-22 01:01:48 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 4, Array)
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
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:4
2013-05-22 01:01:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::set() ~ APPPATH\classes\Controller\user.php [ 35 ] in :
2013-05-22 01:01:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 06:14:03 --- CRITICAL: ErrorException [ 2 ]: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in :
2013-05-22 06:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail(): Failed ...', 'C:\wamp\www\koh...', 15, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(15): mail('thrivikram.kash...', 'My subject', 'First line of t...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-22 06:14:03 --- CRITICAL: ErrorException [ 2 ]: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in :
2013-05-22 06:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail(): Failed ...', 'C:\wamp\www\koh...', 15, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(15): mail('thrivikram.kash...', 'My subject', 'First line of t...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-22 06:18:55 --- CRITICAL: ErrorException [ 2 ]: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in :
2013-05-22 06:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail(): Failed ...', 'C:\wamp\www\koh...', 15, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(15): mail('thrivikram.kash...', 'My subject', 'First line of t...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-22 06:19:14 --- CRITICAL: ErrorException [ 2 ]: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in :
2013-05-22 06:19:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail(): Failed ...', 'C:\wamp\www\koh...', 15, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(15): mail('thrivikram.kash...', 'My subject', 'First line of t...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-22 06:19:18 --- CRITICAL: ErrorException [ 2 ]: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in :
2013-05-22 06:19:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail(): Failed ...', 'C:\wamp\www\koh...', 15, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Welcome.php(15): mail('thrivikram.kash...', 'My subject', 'First line of t...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#8 {main} in :