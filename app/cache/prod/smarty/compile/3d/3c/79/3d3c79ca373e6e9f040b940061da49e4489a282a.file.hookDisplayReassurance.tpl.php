<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:21:29
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayReassurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250875a8c9159cb8e87-53361919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d3c79ca373e6e9f040b940061da49e4489a282a' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayReassurance.tpl',
      1 => 1519154663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250875a8c9159cb8e87-53361919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custom_cart_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c9159d245a3_43401227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c9159d245a3_43401227')) {function content_5a8c9159d245a3_43401227($_smarty_tpl) {?>

<div class="aeuc_cart_custom_text">
	<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['custom_cart_text']->value, ENT_QUOTES, 'UTF-8');?>
</p>
</div>
<?php }} ?>
