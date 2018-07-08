
<div class="tab-category-container-slider"  
	data-items="{$slider_options.number_item}" 
	data-speed="{$slider_options.speed_slide}"
	data-autoplay="{$slider_options.auto_play}"
	data-time="{$slider_options.auto_time}"
	data-arrow="{$slider_options.show_arrow}"
	data-pagination="{$slider_options.show_pagination}"
	data-move="{$slider_options.move}"
	data-pausehover="{$slider_options.pausehover}"
	data-md="{$slider_options.items_md}"
	data-sm="{$slider_options.items_sm}"
	data-xs="{$slider_options.items_xs}"
	data-xxs="{$slider_options.items_xxs}">
	<div class="tab-category">				
		<div class="pos_tab">
			<div class ="pos_title">
				{if $title}				
				<h2><span>{$title}</span></h2>
				{/if}					
				<ul class="tab_cates"> 
					{$count=0}
					{foreach from=$productCates item=productCate name=postabcateslider}
							<li data-title="tabtitle_{$productCate.id}" rel="tab_{$productCate.id}" {if $count==0} class="active"  {/if} > 
							<span>{$productCate.name}</span>
							</li>
							{$count= $count+1}
					{/foreach}	
				</ul>			
			</div> 				
		</div>
		<div class="pos_content">	
			{$rows= $slider_options.rows}			
			<div class="tab1_container"> 
			{foreach from=$productCates item=productCate name=postabcateslider}				
				<div id="tab_{$productCate.id}" class="tab_category">
					<div class="productTabCategorySlider">
					{foreach from=$productCate.products item=product name=myLoop}
						{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
							<div class="item-product">
						{/if}
							<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
								<div class="product_desc">
									{block name='product_name'}
									   <h4><a href="{$product.url}" title="{$product.name}" itemprop="name" class="product_name">{$product.name}</a></h4>
									  {/block}
									  {block name='product_reviews'}
										<div class="hook-reviews">
										{hook h='displayProductListReviews' product=$product}
										</div>
									  {/block}
								</div>
								<div class="img_block">
									{block name='product_thumbnail'}
									  <a href="{$product.url}" class="thumbnail product-thumbnail">
										<img
										  src = "{$product.cover.bySize.home_default.url}"
										  alt = "{$product.cover.legend}"
										  data-full-size-image-url = "{$product.cover.large.url}"
										>
									  </a>
									{/block}
									<div class="quick-view"><a href="#" class="view" data-link-action="quickview">{l s='Quick view' d='Shop.Theme.Actions'}</a></div>										
									{block name='product_price_and_shipping'}
									{if $product.show_price}
									  <div class="product-price-and-shipping">
										  {if $product.discount_type === 'percentage'}
											<span class="discount-percentage">{$product.discount_percentage}</span>
										  {/if}
									  </div>
									{/if}
									{/block}
								</div>
								<div class="product_desc_bottom">
								  {block name='product_price_and_shipping'}
									{if $product.show_price}
									  <div class="product-price-and-shipping">
									  <label>{l s='Price:' d='Shop.Theme.Actions'}</label>
										<span itemprop="price" class="price">{$product.price}</span>
										{if $product.has_discount}
										  {hook h='displayProductPriceBlock' product=$product type="old_price"}

										  <span class="regular-price">{$product.regular_price}</span>
										  {if $product.discount_type === 'percentage'}
											<span class="discount-percentage">{$product.discount_percentage}</span>
										  {/if}
										{/if}

										{hook h='displayProductPriceBlock' product=$product type="before_price"}

										{hook h='displayProductPriceBlock' product=$product type='unit_price'}

										{hook h='displayProductPriceBlock' product=$product type='weight'}
									  </div>
									{/if}
									{/block}
									<div class="block-inner">
										<div class="cart">
											{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
										</div>
										<a href="{$product.url}" title="{$product.name}" class="detail"><i class="ion-link"></i></a>
									</div>
								</div>
							</article>
						{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
							</div>
						{/if}
					{/foreach}
					</div>
				</div>			
			{/foreach}	
			 </div> <!-- .tab_container -->
		</div>
	</div>		
</div>
