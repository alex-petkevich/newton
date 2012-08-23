<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-17 23:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-17 23:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-17 23:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL afadsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-17 23:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL afadsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-17 23:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-17 23:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-17 23:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL afadsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-17 23:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL afadsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#3 {main}