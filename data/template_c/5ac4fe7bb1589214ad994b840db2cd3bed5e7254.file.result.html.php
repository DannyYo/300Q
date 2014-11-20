<?php /* Smarty version Smarty-3.1.16, created on 2014-11-15 19:13:00
         compiled from ".\tpl\result.html" */ ?>
<?php /*%%SmartyHeaderCode:1690354661ecf537906-38214044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ac4fe7bb1589214ad994b840db2cd3bed5e7254' => 
    array (
      0 => '.\\tpl\\result.html',
      1 => 1416078775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1690354661ecf537906-38214044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54661ecf78b4c8_73434131',
  'variables' => 
  array (
    'RoleName' => 0,
    'RoleLevel' => 0,
    'JumpValue' => 0,
    'WinCount' => 0,
    'UpdateTime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54661ecf78b4c8_73434131')) {function content_54661ecf78b4c8_73434131($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="tablesorter" cellspacing="0" style="margin:0">
<?php echo $_smarty_tpl->tpl_vars['RoleName']->value;?>

<?php echo $_smarty_tpl->tpl_vars['RoleLevel']->value;?>
 
<?php echo $_smarty_tpl->tpl_vars['JumpValue']->value;?>

<?php echo $_smarty_tpl->tpl_vars['WinCount']->value;?>

<?php echo $_smarty_tpl->tpl_vars['UpdateTime']->value;?>


</table><?php }} ?>
