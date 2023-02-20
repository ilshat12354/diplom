{*панель навигации*}

<header class="_header">
    <div class="_header__container-down _container">
        <div class="_header__container-down_categories"> 
            <nav class="header__container-down_categories_dropmenu">
                {foreach $rsCategories as $item}
                <ul>
                    <li>
                        <a href = "/?controller=category&id={$item['id']}">{$item['name']}</a>
                        {if isset($item['children'])}
                        <ul>
                            {foreach $item['children'] as $itemChild}
                                <li><a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a></li>
                            {/foreach}
                        </ul>
                        {/if} 
                    </li>
                </ul>
                {/foreach}
            </nav>
        </div>
        <div class="_header__container-down_links">
            <a href="##" class="_header__liks-contacts">Контакты:</a>
            <a href="##" class="_header__links-number">(808) 555-0111</a>
        </div>
    </div>
</header>

