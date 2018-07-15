<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 23:02:00
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9387193685b4421a8894f82-26512285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ef18d26d5707ecd9ee3d357bdd23a991a855d2' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '1de83093fff8ca419a70ff9740d742e7a3ac2ecd' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/variant-links.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9387193685b4421a8894f82-26512285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4421a89614c5_48378521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4421a89614c5_48378521')) {function content_5b4421a89614c5_48378521($_smarty_tpl) {?><article class="js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
	<div class="item-inner">
		<div class="product_desc">
		  
		   <h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="name" class="product_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
		  
		  
			<div class="hook-reviews">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

			</div>
		  
		</div>
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
				   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

			  </a>
			
			
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
			
			<div class="quick-view"><a href="#" class="view" data-link-action="quickview"><?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a></div>
			
			<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
			  <div class="product-price-and-shipping">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
					<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php }?>
			  </div>
			<?php }?>
			
		</div>
		<div class="product_desc_bottom">
		  
			<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
			  <div class="product-price-and-shipping">
				<label><?php echo smartyTranslate(array('s'=>'Price:','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</label>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


				<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
				  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


				  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <!-- <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
					<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php }?> -->
				<?php }?>
			  </div>
			<?php }?>
		  
			<div class="block-inner">
				<div class="cart">
					<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

				</div>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="detail"><i class="ion-link"></i></a>
			</div>
			
				<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			
			
				<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
				  <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '9387193685b4421a8894f82-26512285');
content_5b4421a893ad41_70201283($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
				<?php }?>
			 
		</div>
    </div>
</article>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 23:02:00
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4421a893ad41_70201283')) {function content_5b4421a893ad41_70201283($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
