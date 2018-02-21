<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:15:04
         compiled from "C:\OSPanel\domains\localhost\admin259lokq5s\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16725a8c8fd8e384e7-39712557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1223c9e24ce3b61c5b489f93044bcee3c0496889' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\admin259lokq5s\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1519154652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16725a8c8fd8e384e7-39712557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c8fd8e52025_02979884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c8fd8e52025_02979884')) {function content_5a8c8fd8e52025_02979884($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
