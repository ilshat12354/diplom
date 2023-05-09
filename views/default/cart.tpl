{* шаблон корзины *}

<div class="page__main-block main-block">
    <div class="_container">
        {if ! $rsCourses}
            <div class="page__main-block__fixed">
                <span class="main-block__cart_empty">В корзине пусто</span>
            </div>
        {else}
        <div class="main_block__info">
            <span class="main-block__cart_text">Корзина</span>
            <span class="main-block__cart_info_text">Данные о заказе</span>
        </div>
        <form action="/cart/order/" method="POST">  
            <table class="main-block_cart_table">
                <tr class="main-block__cart_header_table">
                    <td>№</td>
                    <td>Наименование товара</td>
                    <td>Количество</td>
                    <td>Цена за единицу</td>
                    <td>Цена</td>
                </tr>
                {foreach $rsCourses as $item name=course}
                <tr class="main-block__cart_body_table">
                    <td><span>{$smarty.foreach.products.iteration}</span></td>
                    <td><a href="/product/{$item['id']}/">{$item['name']}</a><br /></td>
                    <td><input name="itemCnt_{$item['id']}" class="input_number" id="itemCnt_{$item['id']}" type="number" value="1" min="1" onchange="conversionPrice({$item['id']});"/></td>
                    <td><span id="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span></td>
                    <td><span id="itemRealPrice_{$item['id']}">{$item['price']}</span></td>
                    <td>
                        <div class="main-block__cart_body_table_buttons__container">
                            <div class="main-block__cart_body_table_buttons">
                                <a id="removeCart_{$item['id']}" href="#" onClick="removeFromCart({$item['id']}); return false;" title="Удалить из корзины">Удалить</a>
                                <a id="addCart_{$item['id']}" class="hideme" href="#" onClick="addToCart({$item['id']}); return false;" title="Восстановить элемент">Восстановить</a>
                            </div>
                        </div>
                    </td>
                </tr>
                {/foreach}
            </table>
            <div class="main-block__cart_body_table_buttonCheckout">
                <input {if !isset($arUser)} type="button" onclick="autorizeErrorMessage();" {else} type="submit" {/if} value="Оформить заказ"/>                               
            </div>
        </form>	
        {/if}
    </div>
</div>