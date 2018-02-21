<?php /* Smarty version Smarty-3.1.19, created on 2018-02-21 00:17:20
         compiled from "C:\OSPanel\domains\localhost\themes\classic\modules\ps_legalcompliance\views\templates\hook\hookDisplayFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100215a8c9060486894-06462458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e11f81a111de7eb949e04d0d18abd7c04b49a7a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\classic\\modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayFooter.tpl',
      1 => 1519154668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100215a8c9060486894-06462458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_links' => 0,
    'cms_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c906052b652_72729844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c906052b652_72729844')) {function content_5a8c906052b652_72729844($_smarty_tpl) {?>

<div class="col-md-2 links wrapper">
  <h3 class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_eu_about_us_list" data-toggle="collapse">
    <span class="h3"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="collapse" id="footer_eu_about_us_list">
    <?php  $_smarty_tpl->tpl_vars['cms_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link']->key => $_smarty_tpl->tpl_vars['cms_link']->value) {
$_smarty_tpl->tpl_vars['cms_link']->_loop = true;
?>
      <li>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cms-page-link" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cms_link']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
 </a>
      </li>
    <?php } ?>
  </ul>
</div>
<?php }} ?>
