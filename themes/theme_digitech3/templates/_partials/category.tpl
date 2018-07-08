<div class="category_heading">
    <div class="cat_cover {if $category.image==null}image_off{/if}">
        <div class="category-cover">
          <img class="img-responsive" src="{$category.image.large.url}" alt="{$category.image.legend}">
        </div>
    </div>
      {if $category.description}
        <div id="category-description" class="text-muted">{$category.description nofilter}</div>
      {/if}
</div>