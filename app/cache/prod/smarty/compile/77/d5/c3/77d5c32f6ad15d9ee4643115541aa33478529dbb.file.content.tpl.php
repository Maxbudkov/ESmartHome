<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 23:04:56
         compiled from "C:\OSPanel\domains\localhost\admin259lokq5s\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10355a8c7f68340ca7-69633318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77d5c32f6ad15d9ee4643115541aa33478529dbb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\admin259lokq5s\\themes\\default\\template\\content.tpl',
      1 => 1519154652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10355a8c7f68340ca7-69633318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c7f68347428_09360513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c7f68347428_09360513')) {function content_5a8c7f68347428_09360513($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
