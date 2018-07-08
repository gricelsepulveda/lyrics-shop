<?php /* Smarty version Smarty-3.1.19, created on 2018-07-08 14:06:59
         compiled from "modules/posvegamenu/posvegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5069898695b4252c3332804-56092472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4658b8ebebe06e3ae6188de43cc50e0ededd7332' => 
    array (
      0 => 'modules/posvegamenu/posvegamenu.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5069898695b4252c3332804-56092472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'megamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4252c333a6c5_48482916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4252c333a6c5_48482916')) {function content_5b4252c333a6c5_48482916($_smarty_tpl) {?><div class="navleft-container hidden-md-down ">
	<div class="pt_vegamenu">
		<div class="pt_vmegamenu_title">
			<h2><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'posvegamenu'),$_smarty_tpl);?>
<i class="ion-navicon"></i></h2>
		</div>
		<div id="pt_vmegamenu" class="pt_vmegamenu pt_vegamenu_cate">
			<?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

		</div>
		<div class="clearfix"></div>
	</div>	
</div><?php }} ?>
