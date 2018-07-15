<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 23:02:00
         compiled from "module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6883390615b4421a8833252-98791518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '6883390615b4421a8833252-98791518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4421a88902e1_29939069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4421a88902e1_29939069')) {function content_5b4421a88902e1_29939069($_smarty_tpl) {?>
<section class="categoryproducts">
	<div class="pos_title">
		<h2>
		<?php if (count($_smarty_tpl->tpl_vars['products']->value)==1) {?>
		<?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

		<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

		<?php }?>
		</h2>
	</div>
	<div class="pos_content">
		<div class="product_categoryslide">
			 <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
				<div class="item-product">
					<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php }} ?>
