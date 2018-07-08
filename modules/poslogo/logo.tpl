<div class="container">
	<div class="pos_logo product_block_container">
		<div class="pos_title">
			<h2>{l s='Brands' mod='poslogo'}</h2>
		</div>
		<div class="pos_content">
			<div class="logo-slider">
				{foreach from=$logos item=logo name=posLogo}
					<div class="item_logo">
						<a href ="{$logo.link}">
							<img class="img-responsive" src ="{$logo.image}" alt ="" />
						</a>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
</div>
