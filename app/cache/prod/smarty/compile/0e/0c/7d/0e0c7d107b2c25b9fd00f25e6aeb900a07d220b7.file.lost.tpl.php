<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 23:04:56
         compiled from "C:\OSPanel\domains\localhost\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184935a8c7f685f54e8-25603319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0c7d107b2c25b9fd00f25e6aeb900a07d220b7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1519154664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184935a8c7f685f54e8-25603319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c7f685fea66_66782883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c7f685fea66_66782883')) {function content_5a8c7f685fea66_66782883($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
