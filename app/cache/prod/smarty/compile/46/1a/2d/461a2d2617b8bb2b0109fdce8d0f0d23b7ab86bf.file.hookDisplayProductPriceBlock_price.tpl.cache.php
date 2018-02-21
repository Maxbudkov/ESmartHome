<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:19:54
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayProductPriceBlock_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263825a8c90fa691047-95523234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '461a2d2617b8bb2b0109fdce8d0f0d23b7ab86bf' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayProductPriceBlock_price.tpl',
      1 => 1519154663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263825a8c90fa691047-95523234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c90fa6de6d7_43658803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c90fa6de6d7_43658803')) {function content_5a8c90fa6de6d7_43658803($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }?>
<?php }?>
<?php }} ?>
