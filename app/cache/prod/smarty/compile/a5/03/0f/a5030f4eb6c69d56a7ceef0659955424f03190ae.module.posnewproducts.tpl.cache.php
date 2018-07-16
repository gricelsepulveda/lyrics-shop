<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 19:48:07
         compiled from "module:posnewproducts/views/templates/hook/posnewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7936200875b4d2eb7b26e06-14707394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5030f4eb6c69d56a7ceef0659955424f03190ae' => 
    array (
      0 => 'module:posnewproducts/views/templates/hook/posnewproducts.tpl',
      1 => 1531784451,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '7936200875b4d2eb7b26e06-14707394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slider_options' => 0,
    'title' => 0,
    'image_link' => 0,
    'banner_img' => 0,
    'products' => 0,
    'rows' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4d2eb7ba5086_42959942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4d2eb7ba5086_42959942')) {function content_5b4d2eb7ba5086_42959942($_smarty_tpl) {?><div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
	<div class="pos_new_product  product_block_container" 
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
			<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
			<div class="pos_title">
				 <h2>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

				</h2>	
			</div>
			<?php }?>
			<div class="banner-box">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_link']->value, ENT_QUOTES, 'UTF-8');?>
"><img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['banner_img']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="" title=""/></a>
			</div>
			<?php $_smarty_tpl->tpl_vars['rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['slider_options']->value['rows'], null, 0);?>
			<div class="block-content">
				<div class=" pos_content row">
					<div class="newSlide owl-carousel">
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
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
						</div>
						<?php }?>
					<?php } ?>
					</div>
				</div>
			</div>
	</div>
</div>
<?php }} ?>
