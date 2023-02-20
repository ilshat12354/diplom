{* шаблон главной страницы *}

<div class="page__main-block main-block">
    <div class="main-block__container _container">
        <div class="grid_main_page">
            <div class="grid__body">
                {foreach $rsProducts as $item name=products}
                <div id="grid__item0" class="grid__item">
                    <div class="location">
                        <div class="image">
                            <a href="/product/{$item['id']}/">
                                <img src="/images/products/{$item['image']}" width="150" />
                            </a>
                        </div>
                        <div class="info">
                            <div class="info__name_and_cost">
                                <a href="/product/{$item['id']}/" class="info__name">{$item['name']}</a>
                                <a href="/product/{$item['id']}/" class="info__cost">{$item['price']}</a>
                            </div>
                            <div id="color_change" class="info__button_cart">
                                <a href="##" class="cart_button" id="addCart_{$item['id']}" {if $itemInCart}class="hideme"{/if} onClick="addToCart({$item['id']}); return false;" alt="Добавить в корзину"><img src="/images/img/cart_poducts.png" alt="Корзина"></a> 
                                <a href="##" class="cart_button" id="removeCart_{$item['id']}" {if !$itemInCart}class="hideme"{/if} onClick="removeFromCart({$item['id']}); return false;" alt="Удалить из корзины"><img src="/images/img/cart_poducts.png" alt="Корзина"></a>
                            </div>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>