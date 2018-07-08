{if $breadcrumb.count != 1}
{if $page.page_name == 'category'}
{if $category.image}
	<div class="category-cover">
	  <img src="{$category.image.large.url}" alt="{$category.image.legend}">
	</div>
{/if}
{/if}
<div class="container">
	<div class="breadcrumb_container">
		<nav data-depth="{$breadcrumb.count}" class="breadcrumb">
		  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
			{foreach from=$breadcrumb.links item=path name=breadcrumb}
			  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="{$path.url}">
				  <span itemprop="name">{$path.title}</span>
				</a>
				<meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}">
			  </li>
			{/foreach}
		  </ol>
		</nav>
	</div>
</div>
{/if}