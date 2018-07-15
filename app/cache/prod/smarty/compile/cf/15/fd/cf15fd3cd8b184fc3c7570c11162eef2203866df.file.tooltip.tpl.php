<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 22:52:23
         compiled from "/home/lyricscl/meeta.online/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20096356885b441f67998245-62092826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '20096356885b441f67998245-62092826',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b441f6799de69_97279991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b441f6799de69_97279991')) {function content_5b441f6799de69_97279991($_smarty_tpl) {?>

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
