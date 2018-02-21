<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:21:36
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayCheckoutSummaryTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26915a8c9160944b96-34221815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215629d6073f800597267d7a563e3f8d46d750f9' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayCheckoutSummaryTop.tpl',
      1 => 1519154663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26915a8c9160944b96-34221815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_shopping_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c91609820c7_96348718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c91609820c7_96348718')) {function content_5a8c91609820c7_96348718($_smarty_tpl) {?>

 <h5 class="aeuc_scart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shopping_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'My shopping cart','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</a></h5>
<?php }} ?>
