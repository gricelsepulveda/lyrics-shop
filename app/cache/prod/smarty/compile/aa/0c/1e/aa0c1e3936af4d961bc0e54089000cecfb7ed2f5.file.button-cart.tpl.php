<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 14:15:03
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/customize/button-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2436241635b4ce0a7ceace9-80870205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0c1e3936af4d961bc0e54089000cecfb7ed2f5' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2436241635b4ce0a7ceace9-80870205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'urls' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4ce0a7cf8b07_87794198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ce0a7cf8b07_87794198')) {function content_5b4ce0a7cf8b07_87794198($_smarty_tpl) {?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>	  
	  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
		   
		<div class="product-quantity" style="display:none;">
		 <input type="hidden" name="token" value="798061f062ce6afdfe51b0274b69019c">
		<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="id_customization" value="0">
		<input type="hidden" name="qty" value="1" />
		</div>
		 <a href="javascript:void(0);" class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart">
			<span><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
		  </a>

	</form> 
  <?php }?>
</div>
<?php }} ?>
