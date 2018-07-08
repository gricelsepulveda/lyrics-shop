<div class="ft_newsletter">
	<div class="content_newsletter">
		<div class="newsletter-title">
			<h3 class="footer_header">
				{l s='Sign up for newsletters'  d='Shop.Theme.Global'}
			</h3>
			 {if $conditions}
			  <p class="desc">{$conditions}</p>
			{/if}
		</div>
		<form action="{$urls.pages.index}#footer" method="post">
			<div class="input-wrapper">
			  <input
				name="email"
				class="input_txt"
				type="text"
				value="{$value}"
				placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
			  >
			</div>
			<button class="btn btn-primary" name="submitNewsletter" type="submit" value=""><span>{l s='Subscribe' d='Shop.Theme.Global'}</span></button>
			<input type="hidden" name="action" value="0">
		</form>
	</div>
</div>