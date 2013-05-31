<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-29 05:26:24 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-05-29 05:26:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 05:27:30 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-05-29 05:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 05:48:44 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in :
2013-05-29 05:48:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 06:20:45 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-05-29 06:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 06:26:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Foobar' not found ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in :
2013-05-29 06:26:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 23:36:21 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiTwitter' not found ~ APPPATH\classes\Controller\Twitter.php [ 7 ] in :
2013-05-29 23:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 23:42:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: EpiTwitter::$getAuthenticateUrl ~ APPPATH\classes\Controller\Twitter.php [ 16 ] in C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php:16
2013-05-29 23:42:43 --- DEBUG: #0 C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 16, Array)
#1 C:\wamp\www\kohana3.3\system\classes\Kohana\Controller.php(84): Controller_Twitter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 C:\wamp\www\kohana3.3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana3.3\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana3.3\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana3.3\application\classes\Controller\Twitter.php:16
2013-05-29 23:43:36 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiOAuth' not found ~ APPPATH\helpers\EpiTwitter.php [ 14 ] in :
2013-05-29 23:43:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 23:44:08 --- CRITICAL: ErrorException [ 1 ]: Class 'EpiCurl' not found ~ APPPATH\helpers\EpiOAuth.php [ 378 ] in :
2013-05-29 23:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 23:44:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function inclulde() ~ APPPATH\helpers\EpiOAuth.php [ 3 ] in :
2013-05-29 23:44:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 23:52:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Twitter.php [ 14 ] in :
2013-05-29 23:52:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :