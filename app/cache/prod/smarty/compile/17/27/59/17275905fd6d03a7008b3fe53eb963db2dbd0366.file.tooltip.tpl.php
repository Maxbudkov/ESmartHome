<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 23:04:56
         compiled from "C:\OSPanel\domains\localhost\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270115a8c7f6861edf5-97538654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17275905fd6d03a7008b3fe53eb963db2dbd0366' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1519154664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270115a8c7f6861edf5-97538654',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c7f68623cc4_07091707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c7f68623cc4_07091707')) {function content_5a8c7f68623cc4_07091707($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
