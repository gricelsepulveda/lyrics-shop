<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 15:14:31
         compiled from "modules/poscountdown/views/templates/hook/countdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10578343805b4505973f2e56-70256642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18ec00fef1164672ce07fdb53a15ff3273a33f3' => 
    array (
      0 => 'modules/poscountdown/views/templates/hook/countdown.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10578343805b4505973f2e56-70256642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enddate' => 0,
    'id_cate' => 0,
    'id_product_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b450597418776_36810310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b450597418776_36810310')) {function content_5b450597418776_36810310($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/lyricscl/meeta.online/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['enddate']->value!=null&&$_smarty_tpl->tpl_vars['enddate']->value>0) {?>
<div class='time_count_down'>
    <span class="future_date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_cate']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_time']->value, ENT_QUOTES, 'UTF-8');?>
 time_countdown"  data-date-y ='<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['enddate']->value,"%Y"), ENT_QUOTES, 'UTF-8');?>
' data-date-m ='<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['enddate']->value,"%m"), ENT_QUOTES, 'UTF-8');?>
' data-date-d='<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['enddate']->value,"%d"), ENT_QUOTES, 'UTF-8');?>
' data-date-h = '<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['enddate']->value,"%H"), ENT_QUOTES, 'UTF-8');?>
' data-date-mi = '<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['enddate']->value,"%M"), ENT_QUOTES, 'UTF-8');?>
' data-date-s= '<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['enddate']->value,"%S"), ENT_QUOTES, 'UTF-8');?>
' >  </span>
 </div>
<?php }?>
<?php }} ?>
