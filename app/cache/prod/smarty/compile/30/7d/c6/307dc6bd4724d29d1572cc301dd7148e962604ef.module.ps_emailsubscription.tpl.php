<?php /* Smarty version Smarty-3.1.19, created on 2018-07-08 14:06:59
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10313771365b4252c3504b12-80487648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '10313771365b4252c3504b12-80487648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conditions' => 0,
    'urls' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4252c351c596_51717459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4252c351c596_51717459')) {function content_5b4252c351c596_51717459($_smarty_tpl) {?><div class="ft_newsletter">
	<div class="content_newsletter">
		<div class="newsletter-title">
			<h3 class="footer_header">
				<?php echo smartyTranslate(array('s'=>'Sign up for newsletters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

			</h3>
			 <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
			  <p class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php }?>
		</div>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
			<div class="input-wrapper">
			  <input
				name="email"
				class="input_txt"
				type="text"
				value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
				placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
			  >
			</div>
			<button class="btn btn-primary" name="submitNewsletter" type="submit" value=""><span><?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span></button>
			<input type="hidden" name="action" value="0">
		</form>
	</div>
</div><?php }} ?>
