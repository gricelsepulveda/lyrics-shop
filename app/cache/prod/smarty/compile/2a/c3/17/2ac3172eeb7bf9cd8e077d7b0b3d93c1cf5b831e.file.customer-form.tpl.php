<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 19:26:06
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/customer/_partials/customer-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18288435385b45408e123d44-72647142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac3172eeb7bf9cd8e077d7b0b3d93c1cf5b831e' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/customer/_partials/customer-form.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '83a32cd62a64c0a1e5f351946f19f432a44f4352' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/form-errors.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18288435385b45408e123d44-72647142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'hook_create_account_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b45408e164252_40062858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b45408e164252_40062858')) {function content_5b45408e164252_40062858($_smarty_tpl) {?>

  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '18288435385b45408e123d44-72647142');
content_5b45408e1309a9_24990805($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
      <?php } ?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    
  </section>

  
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      
        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo smartyTranslate(array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

        </button>
      
    </footer>
  

</form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 19:26:06
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b45408e1309a9_24990805')) {function content_5b45408e1309a9_24990805($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    
      <ul>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php } ?>
      </ul>
    
  </div>
<?php }?>
<?php }} ?>