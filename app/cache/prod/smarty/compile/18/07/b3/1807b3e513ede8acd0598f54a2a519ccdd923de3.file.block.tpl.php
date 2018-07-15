<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 15:14:30
         compiled from "modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7074471075b450596843372-04833244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1807b3e513ede8acd0598f54a2a519ccdd923de3' => 
    array (
      0 => 'modules/posstaticblocks/block.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7074471075b450596843372-04833244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b45059686b4a1_11171651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b45059686b4a1_11171651')) {function content_5b45059686b4a1_11171651($_smarty_tpl) {?>
     <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
		  <p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1),$_smarty_tpl);?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php } ?><?php }} ?>
