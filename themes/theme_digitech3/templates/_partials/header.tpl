{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
		{hook h='displayNav'}
		{hook h='displayNav1'}
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-xs-12 col-md-3 col-lg-3" id="header_logo">
          <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
          </a>
        </div>
        <div class="col-xs-12 col-md-9 col-lg-9 display_top">
			{hook h='displayTop'}
        </div>
      </div>
    </div>
  </div>
  <div class="menu-cart-search">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3 col-lg-3">
				{hook h='displayVegamenu'}
			</div>
			<div class="col-xs-12 col-md-12 col-lg-9">
				{hook h='displayMegamenu'}
			</div>
		</div>
	</div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}
