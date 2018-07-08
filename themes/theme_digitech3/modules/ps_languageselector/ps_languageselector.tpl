<div class="localiz_block">
  <div class="language-selector-wrapper">
   <!--  <span class="expand-more hidden-md-up hidden-sm-up">{l s='Language:' d='Shop.Theme'}</span> -->
    <div class="language-selector dropdown js-dropdown">
      <span class="expand-more hidden-sm-down" data-toggle="dropdown">{$current_language.name_simple}<i class="fa-angle-down"></i></span>
      <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
        
      </a>
      <ul class="dropdown-menu hidden-sm-down">
        {foreach from=$languages item=language}
          <li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
            <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item">{$language.name_simple}</a>
          </li>
        {/foreach}
      </ul>
      <select class="link hidden-md-up">
        {foreach from=$languages item=language}
          <option value="{url entity='language' id=$language.id_lang}"{if $language.id_lang == $current_language.id_lang} selected="selected"{/if}>{$language.name_simple}</option>
        {/foreach}
      </select>
    </div>
  </div>
</div>