<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 15:14:31
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/modules/poslistcategories/views/templates/hook/poslistcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20271775815b450597c252a7-04393175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2518d2958923da81c38a0bbd9477a2d3003cb79' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/modules/poslistcategories/views/templates/hook/poslistcategories.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20271775815b450597c252a7-04393175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'link' => 0,
    'subcategory' => 0,
    'count' => 0,
    'slider_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b450597cb7ff2_77774145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b450597cb7ff2_77774145')) {function content_5b450597cb7ff2_77774145($_smarty_tpl) {?>

<div class="container">
	<div class="poslistcategories">
		<div class="pos_title">
			<h2><?php echo smartyTranslate(array('s'=>'Our Categories','mod'=>'poslistcategories'),$_smarty_tpl);?>
</h2>
		</div>
		<div class="block_content">
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
 $_smarty_tpl->tpl_vars['category']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->index++;
 $_smarty_tpl->tpl_vars['category']->first = $_smarty_tpl->tpl_vars['category']->index === 0;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['category']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['category']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
			<div class="item-listcategories">
			<?php }?>	
				<div class="list-categories">
					<?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
					<div class="thumb-category">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."poslistcategories/images/".((string)$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['image'],'htmlall','UTF-8'))), ENT_QUOTES, 'UTF-8');?>
" alt="" /></a>
					</div>
					<?php }?>
					<div class="desc-listcategoreis">			
						<div class="name_categories">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</a>
						</div>
						<div class="sub">
							<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['list_subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
							<?php } ?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
						<div class="description-list">
							<div class="desc-content">
								<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

							</div>
								
						</div>
						<?php }?>
					</div>		
				</div>	
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
			</div>
			<?php }?>			
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>		
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var poslistcategories = $(".poslistcategories .block_content");
		poslistcategories.owlCarousel({
			autoPlay : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['auto_play']) {?><?php if ($_smarty_tpl->tpl_vars['slider_options']->value['delay']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['delay'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3000<?php }?><?php } else { ?> false<?php }?> ,
			items:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['number_item'], ENT_QUOTES, 'UTF-8');?>
,
			slideSpeed: <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1000<?php }?>,
			navigation : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow']) {?> true <?php } else { ?> false <?php }?>,
			pagination : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination']) {?> true <?php } else { ?> false <?php }?>,
			itemsDesktop : [1199,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_md'], ENT_QUOTES, 'UTF-8');?>
],
			itemsDesktopSmall : [991,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_sm'], ENT_QUOTES, 'UTF-8');?>
],
			itemsTablet: [767,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
],
			itemsMobile : [479,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'], ENT_QUOTES, 'UTF-8');?>
],	
		});
	});
</script>
<?php }} ?>
