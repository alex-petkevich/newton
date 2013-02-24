<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-14 00:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:51:14 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-14 00:51:14 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 W:\html\newton\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome')
#1 W:\html\newton\www\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome', NULL)
#2 W:\html\newton\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('welcome')
#3 [internal function]: Kohana_Controller_Template->before()
#4 W:\html\newton\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-14 00:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:51:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\view.php [ 58 ]
2012-08-14 00:51:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\view.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 00:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:52:35 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-14 00:52:35 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 W:\html\newton\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome')
#1 W:\html\newton\www\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome', NULL)
#2 W:\html\newton\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('welcome')
#3 [internal function]: Kohana_Controller_Template->before()
#4 W:\html\newton\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-14 00:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:54:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\view.php [ 58 ]
2012-08-14 00:54:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\view.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 00:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:56:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\view.php [ 30 ]
2012-08-14 00:56:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\view.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 00:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:56:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\ksmarty.php [ 37 ]
2012-08-14 00:56:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\smarty\classes\ksmarty.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 00:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:57:29 --- ERROR: ErrorException [ 1024 ]: Undefined property: Smarty::$security ~ MODPATH\smarty\vendor\smarty\Smarty.class.php [ 697 ]
2012-08-14 00:57:29 --- STRACE: ErrorException [ 1024 ]: Undefined property: Smarty::$security ~ MODPATH\smarty\vendor\smarty\Smarty.class.php [ 697 ]
--
#0 [internal function]: Kohana_Core::error_handler(1024, 'Undefined prope...', 'W:\html\newton\...', 697, Array)
#1 W:\html\newton\www\modules\smarty\vendor\smarty\Smarty.class.php(697): trigger_error('Undefined prope...', 1024)
#2 W:\html\newton\www\modules\smarty\classes\ksmarty.php(47): Smarty->__set('security', false)
#3 W:\html\newton\www\modules\smarty\classes\view.php(32): Ksmarty::instance()
#4 W:\html\newton\www\system\classes\kohana\view.php(343): View::capture('W:\html\newton\...', Array)
#5 W:\html\newton\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 [internal function]: Kohana_Controller_Template->after()
#7 W:\html\newton\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-08-14 00:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 00:59:21 --- ERROR: ErrorException [ 8 ]: Undefined index: intro ~ APPPATH\cache\smarty\compile\116f5a1338c6aceee70e0419d7fc847a29a7143c.file.welcome.tmpl.php [ 29 ]
2012-08-14 00:59:21 --- STRACE: ErrorException [ 8 ]: Undefined index: intro ~ APPPATH\cache\smarty\compile\116f5a1338c6aceee70e0419d7fc847a29a7143c.file.welcome.tmpl.php [ 29 ]
--
#0 W:\html\newton\www\application\cache\smarty\compile\116f5a1338c6aceee70e0419d7fc847a29a7143c.file.welcome.tmpl.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'W:\html\newton\...', 29, Array)
#1 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatebase.php(180): content_502978b86f0094_68523542(Object(Smarty_Internal_Template))
#2 W:\html\newton\www\modules\smarty\classes\view.php(39): Smarty_Internal_TemplateBase->fetch('W:\html\newton\...')
#3 W:\html\newton\www\system\classes\kohana\view.php(343): View::capture('W:\html\newton\...', Array)
#4 W:\html\newton\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 W:\html\newton\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-14 00:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 00:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 01:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-14 01:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:04:34 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "W:\html\newton\www\application\views\cms\default.tmpl"  on line 1 "{extend 'base.tmpl'}" unknown tag "extend" ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php [ 656 ]
2012-08-14 01:04:34 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "W:\html\newton\www\application\views\cms\default.tmpl"  on line 1 "{extend 'base.tmpl'}" unknown tag "extend" ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php [ 656 ]
--
#0 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(441): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ex...', 1)
#1 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(2393): Smarty_Internal_TemplateCompilerBase->compileTag('extend', Array)
#2 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3096): Smarty_Internal_Templateparser->yy_r36()
#3 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3196): Smarty_Internal_Templateparser->yy_reduce(36)
#4 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_smartytemplatecompiler.php(113): Smarty_Internal_Templateparser->doParse(0, 0)
#5 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(192): Smarty_Internal_SmartyTemplateCompiler->doCompile('{extend 'base.t...')
#6 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatebase.php(155): Smarty_Internal_Template->compileTemplateSource()
#8 W:\html\newton\www\modules\smarty\classes\view.php(39): Smarty_Internal_TemplateBase->fetch('W:\html\newton\...')
#9 W:\html\newton\www\system\classes\kohana\view.php(343): View::capture('W:\html\newton\...', Array)
#10 W:\html\newton\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 W:\html\newton\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Default))
#13 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-14 01:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:04:47 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "W:\html\newton\www\application\views\cms\default.tmpl"  on line 1 "{extend 'base.tmpl'}" unknown tag "extend" ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php [ 656 ]
2012-08-14 01:04:47 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "W:\html\newton\www\application\views\cms\default.tmpl"  on line 1 "{extend 'base.tmpl'}" unknown tag "extend" ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php [ 656 ]
--
#0 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(441): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ex...', 1)
#1 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(2393): Smarty_Internal_TemplateCompilerBase->compileTag('extend', Array)
#2 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3096): Smarty_Internal_Templateparser->yy_r36()
#3 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3196): Smarty_Internal_Templateparser->yy_reduce(36)
#4 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_smartytemplatecompiler.php(113): Smarty_Internal_Templateparser->doParse(0, 0)
#5 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(192): Smarty_Internal_SmartyTemplateCompiler->doCompile('{extend 'base.t...')
#6 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatebase.php(155): Smarty_Internal_Template->compileTemplateSource()
#8 W:\html\newton\www\modules\smarty\classes\view.php(39): Smarty_Internal_TemplateBase->fetch('W:\html\newton\...')
#9 W:\html\newton\www\system\classes\kohana\view.php(343): View::capture('W:\html\newton\...', Array)
#10 W:\html\newton\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 W:\html\newton\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Default))
#13 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-14 01:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:06:25 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "W:\html\newton\www\application\views\cms\default.tmpl"  on line 1 "{extend 'base.tmpl'}" unknown tag "extend" ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php [ 656 ]
2012-08-14 01:06:25 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "W:\html\newton\www\application\views\cms\default.tmpl"  on line 1 "{extend 'base.tmpl'}" unknown tag "extend" ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php [ 656 ]
--
#0 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(441): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ex...', 1)
#1 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(2393): Smarty_Internal_TemplateCompilerBase->compileTag('extend', Array)
#2 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3096): Smarty_Internal_Templateparser->yy_r36()
#3 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3196): Smarty_Internal_Templateparser->yy_reduce(36)
#4 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_smartytemplatecompiler.php(113): Smarty_Internal_Templateparser->doParse(0, 0)
#5 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(192): Smarty_Internal_SmartyTemplateCompiler->doCompile('{extend 'base.t...')
#6 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatebase.php(155): Smarty_Internal_Template->compileTemplateSource()
#8 W:\html\newton\www\modules\smarty\classes\view.php(39): Smarty_Internal_TemplateBase->fetch('W:\html\newton\...')
#9 W:\html\newton\www\system\classes\kohana\view.php(343): View::capture('W:\html\newton\...', Array)
#10 W:\html\newton\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 W:\html\newton\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Default))
#13 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-14 01:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:06:53 --- ERROR: SmartyException [ 0 ]: Unable to read template file 'base.tmpl' ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_resource_file.php [ 70 ]
2012-08-14 01:06:53 --- STRACE: SmartyException [ 0 ]: Unable to read template file 'base.tmpl' ~ MODPATH\smarty\vendor\smarty\sysplugins\smarty_internal_resource_file.php [ 70 ]
--
#0 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_resource.php(782): Smarty_Internal_Resource_File->getContent(Object(Smarty_Template_Source))
#1 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_compile_extends.php(114): Smarty_Template_Source->__get('content')
#2 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(473): Smarty_Internal_Compile_Extends->compile(Array, Object(Smarty_Internal_SmartyTemplateCompiler), Array, NULL, NULL)
#3 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(247): Smarty_Internal_TemplateCompilerBase->callTagCompiler('extends', Array, Array)
#4 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(2393): Smarty_Internal_TemplateCompilerBase->compileTag('extends', Array)
#5 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3096): Smarty_Internal_Templateparser->yy_r36()
#6 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templateparser.php(3196): Smarty_Internal_Templateparser->yy_reduce(36)
#7 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_smartytemplatecompiler.php(113): Smarty_Internal_Templateparser->doParse(0, 0)
#8 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatecompilerbase.php(192): Smarty_Internal_SmartyTemplateCompiler->doCompile('{extends file='...')
#9 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#10 W:\html\newton\www\modules\smarty\vendor\smarty\sysplugins\smarty_internal_templatebase.php(155): Smarty_Internal_Template->compileTemplateSource()
#11 W:\html\newton\www\modules\smarty\classes\view.php(39): Smarty_Internal_TemplateBase->fetch('W:\html\newton\...')
#12 W:\html\newton\www\system\classes\kohana\view.php(343): View::capture('W:\html\newton\...', Array)
#13 W:\html\newton\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 [internal function]: Kohana_Controller_Template->after()
#15 W:\html\newton\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Default))
#16 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#19 {main}
2012-08-14 01:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL efsd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 01:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL efsd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\newton\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\newton\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-14 01:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-14 01:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\newton\www\index.php(109): Kohana_Request->execute()
#1 {main}