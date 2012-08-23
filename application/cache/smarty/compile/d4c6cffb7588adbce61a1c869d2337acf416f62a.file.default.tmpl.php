<?php /* Smarty version Smarty-3.1.11, created on 2012-08-14 01:08:48
         compiled from "W:\html\newton\www\application\views\cms\default.tmpl" */ ?>
<?php /*%%SmartyHeaderCode:1265850297a90a18114-27678756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4c6cffb7588adbce61a1c869d2337acf416f62a' => 
    array (
      0 => 'W:\\html\\newton\\www\\application\\views\\cms\\default.tmpl',
      1 => 1344895723,
      2 => 'file',
    ),
    '6ff941abfb999c1be8028ea1364018c5a486aa8b' => 
    array (
      0 => 'W:\\html\\newton\\www\\application\\views\\base.tmpl',
      1 => 1344895670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265850297a90a18114-27678756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50297a90a83561_84153470',
  'variables' => 
  array (
    'test' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50297a90a83561_84153470')) {function content_50297a90a83561_84153470($_smarty_tpl) {?><html>
  <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</h1>
    <p>
	
	<font color="red"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</font>

    </p>
  </body>
</html><?php }} ?>