{if count($products) > 0 && $products != null}
	<div class="pos_featured_product product_block_container">
		<div class="pos_title">
			 <h2>
			{l s='Featured products' mod='posfeaturedproducts'}
			</h2>	
		</div>
		<div class=" pos_content">
			{$rows= $config['POS_HOME_FEATURED_ROWS']}
			<div class="products featuredSlide">
				{foreach from=$products item="product" name=myLoop}
					{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
						<div class="item-product">
					{/if}
					
						{include file="catalog/_partials/miniatures/product.tpl" product=$product}
						
					{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
						</div>
					{/if}
				{/foreach}
			</div>
		</div>
	</div>
{/if}