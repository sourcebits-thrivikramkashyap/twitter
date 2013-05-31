<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-24 02:23:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\user\register.php [ 12 ] in C:\wamp\www\kohana3.3\application\views\user\register.php:12
2013-05-24 02:23:08 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\views\user\register.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\koh...', 12, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\kohana3.3\application\classes\Controller\user.php(36): Kohana_Response->body(Object(View))
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\kohana3.3\application\views\user\register.php:12
2013-05-24 02:32:50 --- CRITICAL: ErrorException [ 1 ]: Class 'epitwitter' not found ~ APPPATH\classes\Controller\Twitter.php [ 7 ] in :
2013-05-24 02:32:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 02:35:01 --- CRITICAL: ErrorException [ 2 ]: include(EpiCurl.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Twitter.php [ 3 ] in C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php:3
2013-05-24 02:35:01 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php(3): Kohana_Core::error_handler(2, 'include(EpiCurl...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php(3): include()
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Core.php(511): require('C:\wamp\www\koh...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Twit...')
#4 [internal function]: spl_autoload_call('Controller_Twit...')
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Twit...')
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php:3
2013-05-24 02:35:54 --- CRITICAL: ErrorException [ 2 ]: include(../helpers/EpiCurl.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Twitter.php [ 3 ] in C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php:3
2013-05-24 02:35:54 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php(3): Kohana_Core::error_handler(2, 'include(../help...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php(3): include()
#2 C:\wamp\www\kohana3.3\system\classes\Kohana\Core.php(511): require('C:\wamp\www\koh...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Twit...')
#4 [internal function]: spl_autoload_call('Controller_Twit...')
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Twit...')
#6 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php:3
2013-05-24 02:38:33 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Twitter.php [ 7 ] in :
2013-05-24 02:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-24 02:44:28 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Twitter.php [ 7 ] in :
2013-05-24 02:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :