{* страница заказа *}

<div class="page__main-block main-block">
    <div class="_container">
        <div class="main_block__info">
            <span class="main-block__cart_info_text">Данные о заказе</span>
        </div>
        <form id="frmOrder" action="/cart/saveorder/" method="POST">  
            <table class="main-block_cart_table">
                <tr class="main-block__cart_header_table">
                    <td>№</td>
                    <td>Наименование товара</td>
                    <td>Количество</td>
                    <td>Цена за единицу</td>
                    <td>Стоимость</td>
                </tr>
                {foreach $rsProducts as $item name=products}
                <tr class="main-block__cart_body_table">
                    <td><span>{$smarty.foreach.products.iteration}</span></td>
                    <td><a href="/product/{$item['id']}/">{$item['name']}</a><br /></td>
                    <td><span id="itemCnt_{$item['id']}" name="itemCnt_{$item['id']}" value="{$item['cnt']}">{$item['cnt']}</span></td>
                    <td><span id="itemPrice_{$item['id']}" name="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span></td>
                    <td><span id="itemRealPrice_{$item['id']}" name="itemPrice_{$item['id']}" value="{$item['price']}">{$item['realPrice']}</span></td>
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

            <div class="main_block__info">
                <span class="main-block__cart_info_text">Данные заказчика</span>
            </div>
            <div id="orderUserInfoBox">
                {$name = $arUser['name']}
                {$phone = $arUser['phone']}
                {$adress = $arUser['adress']}
                
                <table class="main-block_profile_table_order">
                    <tr> 
                        <td>Имя</td>
                        <td class="main-block_profile_table_td_order"><input type="text" id="name" name="name" value="{$name}" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td class="main-block_profile_table_td_order"><input type="text" id="phone"  name="phone" value="{$phone}" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Адрес</td>
                        <td class="main-block_profile_table_td_order"><textarea id="adress" name="adress" class="main-block__textarea">{$adress}</textarea></td>
                    </tr>
                    <tr>
                </table>
            </div>
            
            <div class="main-block__cart_body_table_buttonCheckout">
                <input id="btnSaveOrder" type="submit" onclick="saveOrder();" value="Оформить заказ"/>                               
            </div>
                    
        </form>	
    </div>
</div>
            
            
        


