<?php /* Smarty version Smarty-3.1.19, created on 2018-07-16 14:15:02
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13821611455b4ce0a6bf5825-13972248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '13821611455b4ce0a6bf5825-13972248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4ce0a6c207b2_10661712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4ce0a6c207b2_10661712')) {function content_5b4ce0a6c207b2_10661712($_smarty_tpl) {?>
  <div class="contact-link">
    <!-- <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
	<div class="info_box">
      
      <?php echo smartyTranslate(array('s'=>'Call us : [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

	 </div>
	 <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
		<div class="info_box">
				<?php echo smartyTranslate(array('s'=>'fax : [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
		<div class="info_box">
			<?php echo smartyTranslate(array('s'=>'email :','d'=>'Shop.Theme'),$_smarty_tpl);?>
  <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
		</div>
    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a>
    <?php }?> -->
	<div class="support">
		<span class="support-msg">
			<?php echo smartyTranslate(array('s'=>'Ordered before 17:30, shipped today  - Support: (012) 800 456 789 !','d'=>'Shop.Theme'),$_smarty_tpl);?>

		</span>
	</div>
  </div>

<?php }} ?>
