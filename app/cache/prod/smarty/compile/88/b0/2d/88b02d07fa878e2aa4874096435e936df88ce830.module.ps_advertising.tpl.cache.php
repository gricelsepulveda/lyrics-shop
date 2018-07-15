<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 02:46:27
         compiled from "module:ps_advertising/ps_advertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4699823115b445643d58c85-04629565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b02d07fa878e2aa4874096435e936df88ce830' => 
    array (
      0 => 'module:ps_advertising/ps_advertising.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '4699823115b445643d58c85-04629565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b445643d65987_53094316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b445643d65987_53094316')) {function content_5b445643d65987_53094316($_smarty_tpl) {?>

<div class="advertising">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"/></a>
</div>
<?php }} ?>
