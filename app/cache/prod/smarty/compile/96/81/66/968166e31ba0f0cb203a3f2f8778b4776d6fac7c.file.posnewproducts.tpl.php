<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 15:14:31
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/modules/posnewproducts/posnewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5049627305b450597e1d826-78597386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968166e31ba0f0cb203a3f2f8778b4776d6fac7c' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/modules/posnewproducts/posnewproducts.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5049627305b450597e1d826-78597386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'config' => 0,
    'rows' => 0,
    'product' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b450597ee2815_70609824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b450597ee2815_70609824')) {function content_5b450597ee2815_70609824($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['products']->value)>0&&$_smarty_tpl->tpl_vars['products']->value!=null) {?>
<div class="col-lg-4 col-md-4 col-xs-12">
	<div class="pos_new_product product_block_container">
		<div class="pos_title">
			<h2><?php echo smartyTranslate(array('s'=>'New products','mod'=>'posnewsproducts'),$_smarty_tpl);?>
</h2>
		</div>
		<div class="pos_content">
			<?php $_smarty_tpl->tpl_vars['rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['POS_HOME_NEW_ROWS'], null, 0);?>
			<div class="newSlide">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<article class="js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
							<div class="img_block">
								
								  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
									<img
									  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
									  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
									  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
									>
								  </a>
								
								<div class="quick-view"><a href="#" class="view" data-link-action="quickview"><?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a></div>										
								
								  <ul class="product-flag">
									<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['flag']->value['type']=="discount") {?>
											<?php continue 1?>
										<?php }?>
										<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
									<?php } ?>
								  </ul>
								
								
								<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
								  <div class="product-price-and-shipping">
									  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
										<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php }?>
								  </div>
								<?php }?>
								
							</div>
							<div class="product_desc_bottom product_desc">
								
							   <h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="name" class="product_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
							  
							  
								<div class="hook-reviews">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

								</div>
							  
							  
								<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
								  <div class="product-price-and-shipping">
								  <label><?php echo smartyTranslate(array('s'=>'Price:','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</label>
									<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
									  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


									  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
										<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php }?>
									<?php }?>

									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

								  </div>
								<?php }?>
								
								<div class="block-inner">
									<div class="cart">
										<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

									</div>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="detail"><i class="ion-ios-shuffle-strong"></i></a>
								</div>
							</div>
						</article>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
						</div>
					<?php }?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php }?><?php }} ?>
