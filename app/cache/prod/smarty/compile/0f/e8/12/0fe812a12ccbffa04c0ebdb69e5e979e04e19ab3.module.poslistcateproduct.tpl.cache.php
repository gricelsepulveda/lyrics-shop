<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 14:15:03
         compiled from "module:poslistcateproduct/views/templates/hook/poslistcateproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:561646905b4ce0a771cf91-81800762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe812a12ccbffa04c0ebdb69e5e979e04e19ab3' => 
    array (
      0 => 'module:poslistcateproduct/views/templates/hook/poslistcateproduct.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '561646905b4ce0a771cf91-81800762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productCates' => 0,
    'count' => 0,
    'slider_options' => 0,
    'productCate' => 0,
    'subcategories' => 0,
    'link' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4ce0a779a570_52552804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ce0a779a570_52552804')) {function content_5b4ce0a779a570_52552804($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
?>
	
	<div class="poslistcateproduct poslistcateproduct_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8');?>
 product_container"
		data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['number_item'], ENT_QUOTES, 'UTF-8');?>
" 
		data-speed="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'], ENT_QUOTES, 'UTF-8');?>
"
		data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_play'], ENT_QUOTES, 'UTF-8');?>
"
		data-time="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_time'], ENT_QUOTES, 'UTF-8');?>
"
		data-arrow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow'], ENT_QUOTES, 'UTF-8');?>
"
		data-pagination="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination'], ENT_QUOTES, 'UTF-8');?>
"
		data-move="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['move'], ENT_QUOTES, 'UTF-8');?>
"
		data-pausehover="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['pausehover'], ENT_QUOTES, 'UTF-8');?>
"
		data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_md'], ENT_QUOTES, 'UTF-8');?>
"
		data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_sm'], ENT_QUOTES, 'UTF-8');?>
"
		data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
"
		data-xxs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="container">
			<div class="pos_title">		
				<h2>
					<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productCate']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</span>
				</h2>
				<?php if ($_smarty_tpl->tpl_vars['productCate']->value['list_subcategories']) {?>
				<ul class="subcategories-list">
					<?php  $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCate']->value['list_subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategories']->key => $_smarty_tpl->tpl_vars['subcategories']->value) {
$_smarty_tpl->tpl_vars['subcategories']->_loop = true;
?>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategories']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategories']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
					<?php } ?>
				</ul>
				<?php }?>
				
			</div>
			<div class=" pos_content">
				<div class="listcateSlide">		
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCate']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%$_smarty_tpl->tpl_vars['slider_options']->value['rows']==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
						<div class="item-product">
						<?php }?>
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['slider_options']->value['rows']==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
							</div>
						<?php }?>
					<?php } ?>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['productCate']->value['description']) {?>
			<div class="description-list">
				<?php echo $_smarty_tpl->tpl_vars['productCate']->value['description'];?>

			</div>
			<?php }?>
		</div>
	</div>
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
<?php } ?>
<?php }} ?>
