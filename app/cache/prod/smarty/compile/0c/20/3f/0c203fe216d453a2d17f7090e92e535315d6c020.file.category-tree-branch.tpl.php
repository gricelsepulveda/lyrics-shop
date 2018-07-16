<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 14:15:02
         compiled from "modules/possearchproducts/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12610115765b4ce0a6d598d8-84149527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c203fe216d453a2d17f7090e92e535315d6c020' => 
    array (
      0 => 'modules/possearchproducts/category-tree-branch.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12610115765b4ce0a6d598d8-84149527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'main' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4ce0a6d78836_52432271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ce0a6d78836_52432271')) {function content_5b4ce0a6d78836_52432271($_smarty_tpl) {?>

<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
	<?php if (!$_smarty_tpl->tpl_vars['main']->value) {?><?php echo htmlspecialchars(str_repeat('- ',(2*$_smarty_tpl->tpl_vars['node']->value['currentDepth'])), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

</option>
<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("modules/possearchproducts/category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>false), 0);?>

		<?php } ?>
<?php }?>
<?php }} ?>
