<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 23:02:01
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9006967185b4421a9c5e5d7-08404950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9006967185b4421a9c5e5d7-08404950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4421a9c67540_39668901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4421a9c67540_39668901')) {function content_5b4421a9c67540_39668901($_smarty_tpl) {?><!-- Block search module TOP -->
<div class="block-search  dropdown js-dropdown">
	<span class="search-icon" data-toggle="dropdown"><i class="ion-ios-search-strong"></i></span>
	<div id="search_widget" class="search_top dropdown-menu" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<input type="hidden" name="controller" value="search">
			<input class="text_input" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
			<button type="submit">
				<i class="fa-search"></i>
			</button>
		</form>
	</div>
</div>

<!-- /Block search module TOP -->
<?php }} ?>
