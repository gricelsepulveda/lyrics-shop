<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 22:52:23
         compiled from "/home/lyricscl/meeta.online/admin665ktjzgo/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14477780175b441f67450758-45362458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbff15e94a66dbe4bcc00418f4a125591664be8f' => 
    array (
      0 => '/home/lyricscl/meeta.online/admin665ktjzgo/themes/default/template/content.tpl',
      1 => 1530753255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14477780175b441f67450758-45362458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b441f67459331_74885993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b441f67459331_74885993')) {function content_5b441f67459331_74885993($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
