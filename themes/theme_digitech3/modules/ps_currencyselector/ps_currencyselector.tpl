<div class="localiz_block">
  <div class="currency-selector dropdown js-dropdown">
    <!-- <span>{l s='Currency:' d='Shop.Theme'}</span> -->
    <span class="expand-more _gray-darker hidden-sm-down" data-toggle="dropdown">{$current_currency.iso_code} {$current_currency.sign}<i class="fa-angle-down"></i></span>
    <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
      
    </a>
    <ul class="dropdown-menu hidden-sm-down">
      {foreach from=$currencies item=currency}
        <li {if $currency.current} class="current" {/if}>
          <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.iso_code} {$currency.sign}</a>
        </li>
      {/foreach}
    </ul>
    <select class="link hidden-md-up">
      {foreach from=$currencies item=currency}
        <option value="{$currency.url}"{if $currency.current} selected="selected"{/if}>{$currency.iso_code} {$currency.sign}</option>
      {/foreach}
    </select>
  </div>
</div>