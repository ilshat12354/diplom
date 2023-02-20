{* страница пользователя *}
    
{if isset($arUser)}
    
    <div class="page__main-block main-block">
        <div class="_container">
            <div class="main-block__title">
                <span>Ваши регистрационные данные</span>
            </div>
            <form action="">
                <table class="main-block_profile_table">
                    <tr>
                        <td>Логин (email)</td>
                        <td class="main-block_profile_table_td">{$arUser['email']}</td>
                    </tr>
                    <tr> 
                        <td>Имя</td>
                        <td class="main-block_profile_table_td"><input type="text" id="newName" value="{$arUser['name']}" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td class="main-block_profile_table_td"><input type="text" id="newPhone" value="{$arUser['phone']}" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Адрес</td>
                        <td class="main-block_profile_table_td"><textarea id="newAdress" class="main-block__textarea">{$arUser['adress']}</textarea></td>
                    </tr>
                    <tr>
                        <td>Новый пароль</td>
                        <td class="main-block_profile_table_td"><input type="password" id="newPwd1" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Повтор пароля</td>
                        <td class="main-block_profile_table_td"><input type="password" id="newPwd2" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Для того чтобы сохранить данные введите текущий пароль</td>
                        <td class="main-block_profile_table_td"><input type="password" id="curPwd" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div class="main-block_profile_table_buttons_container">
                                <input type="button" value="Сохранить изменения" onClick="updateUserData();" class="main-block_profile_table_buttonsave"/>
                                <a href="/user/logout/">
                                    <input type="button" value="Выйти" onclick="logout();" class="main-block_profile_table_buttonexit"/>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <div class="page__main-block main-block">
        <div class="_container">
            <div class="main-block__title">
                <span>Заказы</span>
            </div>
            {if ! $rsUserOrders}
                <div class="main-block__title">
                    <span>Нет заказов</span>
                </div>
            {else}
                <table class="main-block__orders_table">
                    <tr class="main-block__orders_header_table">
                        <th>№</th>
                        <th>Действие</th>
                        <th>ID заказа</th>
                        <th>Статус</th>
                        <th>Дата создания</th>
                        <th>Дата оплаты</th>
                        <th>Дополнительная информация</th>
                    </tr>
                    {foreach $rsUserOrders as $item name=orders}
                        <tr class="main-block__orders_body_table">
                            <td>{$smarty.foreach.orders.iteration}</td>
                            <td><a href="#" onclick="showProducts('{$item['id']}'); return false;" >Показать товар заказа</a></td>
                            <td>{$item['id']}</td>
                            <td>{$item['status']}</td>
                            <td>{$item['date_created']}</td>
                            <td>{$item['date_payment']}&nbsp;</td>
                            <td>{$item['comment']}</td>
                        </tr>
                        <tr class="hideme" id="purchasesForOrderId_{$item['id']}" >
                            <td colspan="7">
                                {if $item['children']}
                                    <table class="main-block__orders_table_sub">
                                        <tr class="main-block__orders_header_table">
                                            <th>№</th>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Цена</th>
                                            <th>Количество</th>
                                        </tr>
                                            {foreach $item['children'] as $itemChild name=products}
                                                <tr class="main-block__orders_body_table">
                                                    <td>{$smarty.foreach.products.iteration}</td>
                                                    <td>{$itemChild['product_id']}</td>
                                                    <td><a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a></td>
                                                    <td>{$itemChild['price']}</td>
                                                    <td>{$itemChild['amount']}</td>
                                                </tr>
                                            {/foreach}
                                    </table>
                                {/if}
                            </td>
                        </tr>
                    {/foreach}
                </table>
            {/if}
        </div>
    </div>

    {else}

        {if ! isset($hideLoginBox)}
        <div id="loginBoxHidden">
            <div class="page__main-block main-block">
                <div class="main-block__container _container">
                    <div class="page__main-block-login">
                        <div class="main-block__title">
                            <span class="main-block__title-text">Авторизация</span>
                        </div>
                        <div id="loginBox" class="main-block__body-textbox">
                            <input type="text" id="loginEmail" name="loginEmail" placeholder="Логин">
                            <input type="password" id="loginPwd" name="loginPwd" placeholder="Пароль">
                            <a href="##" class="header_visible-password_log">
                                <img src="/images/img/Eye.png" alt="Посмотреть">
                            </a>
                        </div>
                        <div class="main-block-buttons">
                            <a class="main-block-buttons-link" onclick="login();">
                                <span class="main-block-buttons-reg">Авторизироваться</span>
                            </a>
                            <a href="" class="header_autorize-strelka">
                                <img src="/images/img/Right_strelka.png" alt="Стрелка">
                            </a>
                        </div>
                        <div class="main-block-forgot-password">
                            <span class="main-block-forgot-password_text">Нет аккаунта?</span>
                            <a class="main-block-forgot-password_reg-link">
                                <span class="main-block-forgot-password_reg" onclick="showRegisterBox();">Зарегистрироваться</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="registerBoxHidden" class="hideme">       
            <div id="registerBox" class="page__main-block main-block">
                <div class="main-block__container _container">
                    <div class="page__main-block-reg">
                        <div class="main-block__title">
                            <span class="main-block__title-text">Регистрация</span>
                        </div>
                        <div class="main-block__body-textbox">
                            <input type="text" id="email" name="email" class="main-block__body-textbox_log" placeholder="Почта">
                            <input type="password" id="pwd1" name="pwd1" class="main-block__body-textbox_pass" placeholder="Пароль">
                            <input type="password" id="pwd2" name="pwd2" placeholder="Повторите пароль">
                            <a href="##" class="header_visible-password_reg">
                                <img src="/images/img/Eye.png" alt="Посмотреть">
                            </a>
                        </div>
                        <div class="main-block-buttons">
                            <a class="main-block-buttons-link">
                                <span class="main-block-buttons-reg" onclick="registerNewUser();">Зарегистрироваться</span>
                            </a>
                            <a href="" class="header_autorize-strelka">
                                <img src="/images/img/Right_strelka.png" alt="Стрелка">
                            </a>
                        </div> 
                        <div class="main-block-log">
                            <a class="main-block-forgot-password_log-link">
                                <span class="main-block-forgot-password_log" onclick="showLoginBox();">Авторизироваться</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}
{/if}
