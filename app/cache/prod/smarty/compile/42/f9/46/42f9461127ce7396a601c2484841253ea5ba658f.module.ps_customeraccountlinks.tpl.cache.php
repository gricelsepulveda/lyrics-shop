<?php /* Smarty version Smarty-3.1.19, created on 2018-07-08 14:06:59
         compiled from "module:ps_customeraccountlinks/ps_customeraccountlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8558451795b4252c3730075-69195543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1531073008,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8558451795b4252c3730075-69195543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4252c3743563_73875023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4252c3743563_73875023')) {function content_5b4252c3743563_73875023($_smarty_tpl) {?><div id="block_myaccount_infos" class="col-xs-12 col-md-2 col-lg-3 col-xl-3 links wrapper">
	<div class="footer_block">
  <h3 class="footer_header">
      <?php echo smartyTranslate(array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

  </h3>
  <ul class="account-list footer_list toggle-footer" id="footer_account_list">
    <?php  $_smarty_tpl->tpl_vars['my_account_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_account_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['my_account_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->key => $_smarty_tpl->tpl_vars['my_account_url']->value) {
$_smarty_tpl->tpl_vars['my_account_url']->_loop = true;
?>
        <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
    <?php } ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMyAccountBlock'),$_smarty_tpl);?>

	</ul>
</div>
</div>
<?php }} ?>
