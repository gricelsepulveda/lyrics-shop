<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 14:15:03
         compiled from "modules/postabproductslider/producttabslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1773294705b4ce0a7b67b35-01091013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4ae183c9af47e9d4f0f921657ff75d7bc59497' => 
    array (
      0 => 'modules/postabproductslider/producttabslider.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1773294705b4ce0a7b67b35-01091013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productTabslider' => 0,
    'productTab' => 0,
    'count' => 0,
    'config' => 0,
    'countss' => 0,
    'rows' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4ce0a7bd4175_23669372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ce0a7bd4175_23669372')) {function content_5b4ce0a7bd4175_23669372($_smarty_tpl) {?>
<div class="product-tabs-container-slider product_block_container">
<div class="container">
	<div class="pos_title">		
		<h2>
			<span><?php echo smartyTranslate(array('s'=>'our products','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span>
		</h2>			
		<ul class="tabs_slider"> 
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['productTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTabslider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productTab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productTab']->iteration=0;
 $_smarty_tpl->tpl_vars['productTab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productTab']->key => $_smarty_tpl->tpl_vars['productTab']->value) {
$_smarty_tpl->tpl_vars['productTab']->_loop = true;
 $_smarty_tpl->tpl_vars['productTab']->iteration++;
 $_smarty_tpl->tpl_vars['productTab']->index++;
 $_smarty_tpl->tpl_vars['productTab']->first = $_smarty_tpl->tpl_vars['productTab']->index === 0;
 $_smarty_tpl->tpl_vars['productTab']->last = $_smarty_tpl->tpl_vars['productTab']->iteration === $_smarty_tpl->tpl_vars['productTab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['first'] = $_smarty_tpl->tpl_vars['productTab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['last'] = $_smarty_tpl->tpl_vars['productTab']->last;
?>
			<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['id'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabProduct']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabProduct']['last']) {?>last_item<?php } else { ?><?php }?> item <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?> active <?php }?>" rel="tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['id'], ENT_QUOTES, 'UTF-8');?>
"  >
				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>

			</li>
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>	
	</ul>
	</div>
	<?php $_smarty_tpl->tpl_vars['rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['POS_HOME_PRODUCTTAB_ROWS'], null, 0);?>
	<div class="pos_content"> 
	<?php $_smarty_tpl->tpl_vars['countss'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['productTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTabslider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productTab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productTab']->iteration=0;
 $_smarty_tpl->tpl_vars['productTab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productTab']->key => $_smarty_tpl->tpl_vars['productTab']->value) {
$_smarty_tpl->tpl_vars['productTab']->_loop = true;
 $_smarty_tpl->tpl_vars['productTab']->iteration++;
 $_smarty_tpl->tpl_vars['productTab']->index++;
 $_smarty_tpl->tpl_vars['productTab']->first = $_smarty_tpl->tpl_vars['productTab']->index === 0;
 $_smarty_tpl->tpl_vars['productTab']->last = $_smarty_tpl->tpl_vars['productTab']->iteration === $_smarty_tpl->tpl_vars['productTab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['first'] = $_smarty_tpl->tpl_vars['productTab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['last'] = $_smarty_tpl->tpl_vars['productTab']->last;
?>
			<div id="tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab_content">
				<div class="productTabContent<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countss']->value, ENT_QUOTES, 'UTF-8');?>
">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTab']->value['productInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
					<div class="item-product">
				<?php }?>
				
				<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

					
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
					</div>
				<?php }?>	
				<?php } ?>
				</div>
			</div>
			<?php $_smarty_tpl->tpl_vars['countss'] = new Smarty_variable($_smarty_tpl->tpl_vars['countss']->value+1, null, 0);?>
	<?php } ?>	
	</div>
</div>
</div>
<?php }} ?>
