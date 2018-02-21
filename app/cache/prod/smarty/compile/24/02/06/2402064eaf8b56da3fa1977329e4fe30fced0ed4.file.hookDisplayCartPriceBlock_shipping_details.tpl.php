<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:21:26
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayCartPriceBlock_shipping_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205895a8c9156bd0401-38572352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2402064eaf8b56da3fa1977329e4fe30fced0ed4' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1519154662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205895a8c9156bd0401-38572352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c9156c0e399_34502384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c9156c0e399_34502384')) {function content_5a8c9156c0e399_34502384($_smarty_tpl) {?>

 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo smartyTranslate(array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

 </a>
<?php }} ?>
