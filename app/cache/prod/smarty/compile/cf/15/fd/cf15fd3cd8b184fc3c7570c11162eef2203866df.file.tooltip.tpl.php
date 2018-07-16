<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 14:14:30
         compiled from "/home/lyricscl/meeta.online/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8858562005b4ce086417074-72897625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf15fd3cd8b184fc3c7570c11162eef2203866df' => 
    array (
      0 => '/home/lyricscl/meeta.online/modules/welcome/views/templates/tooltip.tpl',
      1 => 1530753257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8858562005b4ce086417074-72897625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4ce08641c2c0_61984549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ce08641c2c0_61984549')) {function content_5b4ce08641c2c0_61984549($_smarty_tpl) {?>

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
