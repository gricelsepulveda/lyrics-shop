<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 15:18:39
         compiled from "/home/lyricscl/meeta.online/admin665ktjzgo/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5083569145b45068fda69f2-33063100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aada6aafb554c5cb2c3a452e2483a158606aec14' => 
    array (
      0 => '/home/lyricscl/meeta.online/admin665ktjzgo/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1530753256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5083569145b45068fda69f2-33063100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b45068fdb4368_51505782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b45068fdb4368_51505782')) {function content_5b45068fdb4368_51505782($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
