<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 14:12:34
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/errors/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18351493965b44f71261b8c4-53150050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b9318e9789c06edd158ba9e7f072ec8da8020a1' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/errors/maintenance.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    'c8b534525fd2fb2a4685aae913c7ca4607ff33cb' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/layouts/layout-error.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18351493965b44f71261b8c4-53150050',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b44f712735b01_82469298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b44f712735b01_82469298')) {function content_5b44f712735b01_82469298($_smarty_tpl) {?><!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
      <title></title>
      <meta name="description" content="">
      <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  </head>

  <body>

    

  <section id="main">

    
      <header class="page-header">
        
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        

        
          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        

        
          <h1><?php echo smartyTranslate(array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h1>
        
      </header>
    

    
      <section id="content" class="page-content page-maintenance">
        
          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        
      </section>
    

    

    

  </section>



    <!-- Load JS files here -->

  </body>

</html>
<?php }} ?>
