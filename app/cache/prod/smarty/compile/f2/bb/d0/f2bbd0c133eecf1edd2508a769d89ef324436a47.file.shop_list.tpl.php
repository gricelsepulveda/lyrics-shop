<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 22:52:28
         compiled from "/home/lyricscl/meeta.online/admin665ktjzgo/themes/new-theme/template/components/layout/shop_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17324905395b441f6c0b29a1-52913763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2bbd0c133eecf1edd2508a769d89ef324436a47' => 
    array (
      0 => '/home/lyricscl/meeta.online/admin665ktjzgo/themes/new-theme/template/components/layout/shop_list.tpl',
      1 => 1530753255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17324905395b441f6c0b29a1-52913763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_multishop' => 0,
    'shop_list' => 0,
    'multishop_context' => 0,
    'current_shop_name' => 0,
    'base_url' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b441f6c0dba41_07914456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b441f6c0dba41_07914456')) {function content_5b441f6c0dba41_07914456($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['is_multishop']->value)&&$_smarty_tpl->tpl_vars['is_multishop']->value&&$_smarty_tpl->tpl_vars['shop_list']->value&&(isset($_smarty_tpl->tpl_vars['multishop_context']->value)&&$_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_GROUP||$_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_SHOP||$_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_ALL)) {?>
  <div id="shop-list" class="shop-list dropdown ps-dropdown stores">
    <span class="link" data-toggle="dropdown">
      <span class="selected-item">
        <?php if (!isset($_smarty_tpl->tpl_vars['current_shop_name']->value)||$_smarty_tpl->tpl_vars['current_shop_name']->value=='') {?>
          <?php echo smartyTranslate(array('s'=>'All shops'),$_smarty_tpl);?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['current_shop_name']->value;?>

        <?php }?>
        <i class="material-icons arrow-down">keyboard_arrow_down</i>
      </span>
    </span>
    <div class="dropdown-menu ps-dropdown-menu">
      <?php echo $_smarty_tpl->tpl_vars['shop_list']->value;?>

    </div>
  </div>
<?php } else { ?>
  <div class="shop-list">
    <a class="link" id="header_shopname" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['base_url']->value,'html','UTF-8');?>
" target= "_blank"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</a>
  </div>
<?php }?>
<?php }} ?>
