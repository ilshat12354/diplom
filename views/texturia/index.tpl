{* шаблон главной страницы *}
<div class="joomcat">
    <div class="joomcat65_row">
        {foreach $rsProducts as $item name = products}
            <div style="width: 216px !important; margin-right: 10px;" class="joomcat65_imgct">
                <div class="joomcat65_img cat_img">
                    <a href="/product/{$item['id']}/">
                        <img src="/images/products/{$item['image']}"/>
                    </a>
                </div>
                    
                <div style="padding-bottom: 10px; padding-top: 10px;" class="joomcat65_txt">
                    <ul>
                        <li><a href="/product/{$item['id']}/">{$item['name']}</a></li>
                    </ul>
                </div>
            </div>
                    
            {if $smarty.foreach.products.iteration mod 3 == 0}
                <div class="joomcat65_clr"></div>       
    </div>
                <div class="joomcat65_row">
            {/if}
        {/foreach}
                </div>
</div>
