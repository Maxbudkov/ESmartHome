<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:19:54
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayProductPriceBlock_after_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218075a8c90fa6ffd15-37865148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b0d0853c13cb70f45f50edf3c922ecef1090ee' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayProductPriceBlock_after_price.tpl',
      1 => 1519154663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218075a8c90fa6ffd15-37865148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c90fa732012_57874890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c90fa732012_57874890')) {function content_5a8c90fa732012_57874890($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'])) {?>
        <span class="aeuc_delivery_label">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }?>
<?php }?>
<?php }} ?>
