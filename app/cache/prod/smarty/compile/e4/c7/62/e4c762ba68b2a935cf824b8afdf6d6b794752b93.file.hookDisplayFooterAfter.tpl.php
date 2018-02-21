<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:17:20
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayFooterAfter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84425a8c9060545643-35356273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c762ba68b2a935cf824b8afdf6d6b794752b93' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayFooterAfter.tpl',
      1 => 1519154663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84425a8c9060545643-35356273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'delivery_additional_information' => 0,
    'link_shipping' => 0,
    'tax_included' => 0,
    'show_shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c90605f24e9_33471797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c90605f24e9_33471797')) {function content_5a8c90605f24e9_33471797($_smarty_tpl) {?>

<div class="aeuc_footer_info">
	<?php if (isset($_smarty_tpl->tpl_vars['delivery_additional_information']->value)) {?>
		* <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_additional_information']->value, ENT_QUOTES, 'UTF-8');?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shipping']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Shipping and payment','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</a>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['tax_included']->value) {?>
			<?php echo smartyTranslate(array('s'=>'All prices are mentioned tax included','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'All prices are mentioned tax excluded','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_shipping']->value) {?>
			<?php echo smartyTranslate(array('s'=>'and','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['link_shipping']->value) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shipping']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>
			<?php echo smartyTranslate(array('s'=>'shipping excluded','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['link_shipping']->value) {?>
				</a>
			<?php }?>
		<?php }?>
	<?php }?>
</div>
<?php }} ?>
