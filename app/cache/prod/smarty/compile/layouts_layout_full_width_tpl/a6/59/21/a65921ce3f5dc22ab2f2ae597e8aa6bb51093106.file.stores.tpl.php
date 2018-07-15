<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/cms/stores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1758175085b4561ac91ecc8-91138447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65921ce3f5dc22ab2f2ae597e8aa6bb51093106' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/cms/stores.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '8030cba1e9c67708000439daaa99c9f9a5102802' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/page.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    'dfb1617d14036966a7355b059b0b44eb5c7410c9' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/layouts/layout-full-width.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '25825e6ab7a21f3c9f5ff566b8bad199f23305f4' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/layouts/layout-both-columns.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    'cad1bd5e52773bb811396e1f4eb67e3ad8ea84e8' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/stylesheets.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '3f335febc12f7155f8431f987c96f4018d230279' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/javascript.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    'cf4ecb6f6ab43b7f282c3f5eb4084ec324921fb9' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/head.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '6efb6147ac8f8d911da76f3a4b034559ce7722c0' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/product-activation.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '40fce394702e7c80dba1ee6b1eabc08a9461ff2d' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/header.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    'a6f0572086733691c8b313095655985c248e39b2' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/notifications.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    'bf19ee43ff95fa89ee18e32352cccb85252539bd' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/breadcrumb.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
    '4610dc236007f4f3f0aefc05cf8c8c10e366f700' => 
    array (
      0 => '/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/footer.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1758175085b4561ac91ecc8-91138447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4561acd12170_04817290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4561acd12170_04817290')) {function content_5b4561acd12170_04817290($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561aca3fbc4_87639512($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>sub-page<?php }?>">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acafc322_83638764($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acb0ddb2_04744885($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
	  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

		<div class="positiontop">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4 col-lg-4">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition1'),$_smarty_tpl);?>

					</div>
					<div class="col-xs-12 col-md-8 col-lg-8">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition2'),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition3'),$_smarty_tpl);?>

		<div class="blockPosition4">
			<div class="container">
				<div class="row">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition4'),$_smarty_tpl);?>

				</div>
			</div>
		</div>
	  <?php }?>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acb38e89_92288140($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
      <div id="wrapper">
		<div class="container">
			<div class="breadcrumb-name">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='category') {?>
				<?php }?>
				
					<?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acb855f1_68319672($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
				
			</div>
		</div>
        <div class="inner-wrapper container">
			<div class="row">
			  

			  
  <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
    

  <div id="main">

    
      
        <header class="page-header">
          <h1>
  <?php echo smartyTranslate(array('s'=>'Our stores','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

</h1>
        </header>
      
    

    
  <section id="content" class="page-content page-stores">

    <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
      <article id="store-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="store-item card">
        <div class="store-item-container clearfix">
          <div class="col-md-3 store-picture hidden-sm-down">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['image']['bySize']['stores_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
          </div>
          <div class="col-md-5 col-sm-7 col-xs-12 store-description">
            <h3 class="h3 card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
            <address><?php echo $_smarty_tpl->tpl_vars['store']->value['address']['formatted'];?>
</address>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['note']||$_smarty_tpl->tpl_vars['store']->value['phone']||$_smarty_tpl->tpl_vars['store']->value['fax']||$_smarty_tpl->tpl_vars['store']->value['email']) {?>
              <a data-toggle="collapse" href="#about-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
" aria-expanded="false" aria-controls="about-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo smartyTranslate(array('s'=>'About and Contact','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</strong><i class="material-icons">&#xE409;</i></a>
            <?php }?>
          </div>
          <div class="col-md-4 col-sm-5 col-xs-12 divide-left">
            <table>
              <?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store']->value['business_hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
              <tr>
                <th><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['day']->value['day'],4,'.'), ENT_QUOTES, 'UTF-8');?>
</th>
                <td>
                  <ul>
                  <?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['day']->value['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php } ?>
                  </ul>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
        <footer id="about-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="collapse">
          <div class="store-item-footer divide-top">
            <div class="card-block">
              <?php if ($_smarty_tpl->tpl_vars['store']->value['note']) {?>
                <p class="text-justify"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['note'], ENT_QUOTES, 'UTF-8');?>
<p>
              <?php }?>
            </div>
            <ul class="card-block">
              <?php if ($_smarty_tpl->tpl_vars['store']->value['phone']) {?>
                <li><i class="material-icons">&#xE0B0;</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['store']->value['fax']) {?>
                <li><i class="material-icons">&#xE8AD;</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['store']->value['email']) {?>
                <li><i class="material-icons">&#xE0BE;</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php }?>
            </ul>
          </div>
        </footer>
      </article>
    <?php } ?>

  </section>


    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </div>

  </div>


			  
			</div>
        </div>
      </div>
      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acd06304_67234631($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

	<div class="back-top"><a href= "#" class="back-top-button"><i class="ion-chevron-up"></i></a></div>

  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561aca3fbc4_87639512')) {function content_5b4561aca3fbc4_87639512($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561aca87c62_64207670($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acab1029_53448940($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '1758175085b4561ac91ecc8-91138447');
content_5b4561acab1029_53448940($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561aca87c62_64207670')) {function content_5b4561aca87c62_64207670($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561acab1029_53448940')) {function content_5b4561acab1029_53448940($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561acafc322_83638764')) {function content_5b4561acafc322_83638764($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561acb0ddb2_04744885')) {function content_5b4561acb0ddb2_04744885($_smarty_tpl) {?>

  <nav class="header-nav">
    <div class="container">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav'),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

    </div>
  </nav>



  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-xs-12 col-md-3 col-lg-3" id="header_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-xs-12 col-md-9 col-lg-9 display_top">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

        </div>
      </div>
    </div>
  </div>
  <div class="menu-cart-search">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3 col-lg-3">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayVegamenu'),$_smarty_tpl);?>

			</div>
			<div class="col-xs-12 col-md-12 col-lg-9">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMegamenu'),$_smarty_tpl);?>

			</div>
		</div>
	</div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561acb38e89_92288140')) {function content_5b4561acb38e89_92288140($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561acb855f1_68319672')) {function content_5b4561acb855f1_68319672($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['count']!=1) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='category') {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
	<div class="category-cover">
	  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
	</div>
<?php }?>
<?php }?>
<div class="container">
	<div class="breadcrumb_container">
		<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
		  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
			<?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
			  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
				  <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
				</a>
				<meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
			  </li>
			<?php } ?>
		  </ol>
		</nav>
	</div>
</div>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-07-10 21:47:24
         compiled from "/home/lyricscl/meeta.online/themes/theme_digitech3/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4561acd06304_67234631')) {function content_5b4561acd06304_67234631($_smarty_tpl) {?><div class="footer-top">
	<div class="container">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

	</div>
</div>
<div class="footer-center">
	<div class="container">
		<div class="row">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

		</div>
	</div>
</div>
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

		</div>
	</div>
</div><?php }} ?>
