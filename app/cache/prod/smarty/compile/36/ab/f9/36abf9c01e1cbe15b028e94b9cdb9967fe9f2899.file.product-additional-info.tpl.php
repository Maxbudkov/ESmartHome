<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:21:24
         compiled from "C:\OSPanel\domains\localhost\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54555a8c9154a32b16-64539052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36abf9c01e1cbe15b028e94b9cdb9967fe9f2899' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1519154669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54555a8c9154a32b16-64539052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c9154a36941_79448296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c9154a36941_79448296')) {function content_5a8c9154a36941_79448296($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
