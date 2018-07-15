<?php /*%%SmartyHeaderCode:20582007555b4505967dbbe1-72025474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d83e1d70b0e6ba36bc76ca8850e38f66bd070d' => 
    array (
      0 => 'modules/posslideshows/views/templates/hook/slider.tpl',
      1 => 1531073008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20582007555b4505967dbbe1-72025474',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b464dab1c4745_48346749',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b464dab1c4745_48346749')) {function content_5b464dab1c4745_48346749($_smarty_tpl) {?><div class="slideshow_container">
	<div class="pos-slideshow">
		<div class="flexslider ma-nivoslider">
			<div class="pos-loading"></div>
			<div id="pos-slideshow-home" class="slides">
				
													<a href="http://www.posthemes.com" title="Sample 1" ><img style="display:none" src="http://www.meeta.online/modules/posslideshows/images/sample-1.jpg"  data-thumb="http://www.meeta.online/modules/posslideshows/images/sample-1.jpg"  alt="" title="#htmlcaption1"  /> </a>
			   					<a href="http://www.posthemes.com" title="Sample 2" ><img style="display:none" src="http://www.meeta.online/modules/posslideshows/images/sample-2.jpg"  data-thumb="http://www.meeta.online/modules/posslideshows/images/sample-2.jpg"  alt="" title="#htmlcaption2"  /> </a>
			   					<a href="http://www.posthemes.com" title="Sample 3" ><img style="display:none" src="http://www.meeta.online/modules/posslideshows/images/sample-3.jpg"  data-thumb="http://www.meeta.online/modules/posslideshows/images/sample-3.jpg"  alt="" title="#htmlcaption3"  /> </a>
			   			</div>
												<div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">
														<div class="banner7-des"><div class="container"><div class="info desc1">
						<p class="title1">Macbook Air</p>
						<p class="title2">Bestseller Products</p>
						<p class="title3">Apples lowest-cost notebook starting at $999, available with a 13-inch display.</p>
						<p class="readmore"><a href="#"><span>shopping Now</span></a></p>
						</div></div> </div>
														<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:9;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
						
					</div>
				 					<div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">
														<div class="banner7-des"><div class="container"><div class="info desc1">
						<p class="title1">Google Home</p>
						<p class="title2">New Products 2018</p>
						<p class="title3">Google Home is a smart speaker developed by Google as part of its "Made By Google" product line.</p>
						<p class="readmore"><a href="#"><span>shopping Now</span></a></p>
						</div></div> </div>
														<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:9;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
						
					</div>
				 					<div id="htmlcaption3" class="pos-slideshow-caption nivo-html-caption nivo-caption">
														<div class="banner7-des"><div class="container"><div class="info desc2">
						<p class="title1">Programas</p>
						<p class="title2">Para Lavadora Bosch</p>
						<p class="title3">Washing Tachnology User 6 different wash motions, designed to best care for your clother, just like hand wash.</p>
						<p class="readmore"><a href="#"><span>shopping Now</span></a></p>
						</div></div> </div>
														<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:9;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
						
					</div>
				 			 		</div>
	</div>
</div>

 <script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script><?php }} ?>
