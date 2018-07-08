{if count($products) > 0 && $products != null}
<section class="container">
	<div class="pos_new_product product_block_container">
		<div class="pos_title">
			<h2>{l s='Latest Arrivals' mod='posnewsproducts'}</h2>
			<p class="des-title">{l s='Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas. ' mod='posnewsproducts'}</p>
		</div>
		<div class="row pos_content">
			{$rows= $config['POS_HOME_NEW_ROWS']}
			<div class="newSlide">
				{foreach from=$products item=product name=myLoop}
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
</section>

{/if}