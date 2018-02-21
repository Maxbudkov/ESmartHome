<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:16:09
         compiled from "C:\OSPanel\domains\localhost\modules\ps_wirepayment\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139375a8c90196d80a6-06368610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a52392b9b9a5200dc62ed1a5781bf0e193a106e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\modules\\ps_wirepayment\\views\\templates\\hook\\infos.tpl',
      1 => 1519154663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139375a8c90196d80a6-06368610',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c901970c358_43691444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c901970c358_43691444')) {function content_5a8c901970c358_43691444($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
