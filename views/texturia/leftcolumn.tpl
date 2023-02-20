<div id="jf-right">
    <div class="jfmod module" id="Mod52">
        <div class="jfmod-top"></div>
        <div class="jfmod-mid">
            <h3>Меню: </h3>
            <div class="jfmod-content">
                <ul class="menu">
                    {foreach $rsCategories as $item}
                        <li class="item44">
                            <a href="/category/{$item['id']}/"><span>{$item['name']}</span></a>
                        </li>
                        {if isset($item['children'])}
                            <ul class="menu" style="padding: 0px 0px 10px 20px;">
                                {foreach $item['children'] as $itemChild}
                                    <li class="item44">
                                        <a href="/category/{$itemChild['id']}/"><span>{$itemChild['name']}</span></a>
                                    </li>
                                {/foreach}
                            </ul>
                        {/if}
                    {/foreach}
                </ul>
            </div>
        </div>
        <div class="jfmod-bot"></div>
    </div>
                
    <div class="jfmod module_blue" id="Mod66">
        <div class="jfmod-top"></div>
        <div class="jfmod-mid">
            <h3>Корзина</h3>
            <div class="jfmod-content">
                <div class="jooming66_main">
                    <div class="jooming_row" style="font-size: 16px">
                        <a href="/cart/" title="Перейти в корзину">В корзине</a>
                        <span id="cartCntItems">
                            {if $cartCntItems > 0}{$cartCntItems}{else}пусто{/if}
                        </span>
                    </div>
                    <div class="jooming_clr"></div>
                </div>
            </div>
        </div>
        <div class="jfmod-bot"></div>
    </div>
                        
    <div class="jfmod module_orangebold" id="Mod53">
        <div class="jfmod-top"></div>
        <div class="jfmod-mid">
            
            <div class="jfmod-content">
                
                {if isset($arUser)}
                    <div id="userBox">
                        <a href="/user/" id="userLink">{$arUser['displayName']}</a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>
                {else}
                    <div id="userBox" style="display: none" >
                        <a href="#" id="userLink"></a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>
                    {if ! isset($hideLoginBox)}
                        <div id="loginBox">
                            <div id="form-login">
                                Введите логин и пароль
                                <fieldset class="input">
                                    <p id="form-login-username">
                                        <input type="text" id="loginEmail" value="Username" name="username" class="inputbox" alt="username" onblur="if(this.value==='') this.value='Username';" onfocus="if(this.value==='Username') this.value='';">
                                    </p>
                                    <p id="form-login-password">
                                        <input type="password" id="loginPwd" value="Password" name="passwd" class="inputbox" onblur="if(this.value==='') this.value='Password';" onfocus="if(this.value==='Password') this.value='';" alt="password">
                                    </p>
                                    <p style="text-align:right">
                                        <input type="button" class="buttonLogin" onclick="login();" value="Войти">
                                </fieldset>
                            </div>
                        </div>
                        
                        <div id="registerBox">
                            <div class="re-link menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                            <div id="form-login">
                                <fieldset class="input">
                                    <div id="registerBoxHidden" style="display: none;">
                                        <p>
                                            email:<br />
                                            <input type="text" id="email" name="email" value=""/><br />
                                            пароль:<br />
                                            <input type="password" id="pwd1" name="pwd1" value=""/><br />
                                            повторить пароль:<br />
                                            <input type="password" id="pwd2" name="pwd2" value=""/><br />
                                        </p>
                                        <input type="button" class="buttonLogin" onclick="registerNewUser();" value="Зарегистрироваться"/><br />
                                    </div>
                                </fieldset>
                            </div>
                            <p></p>
                        </div>
                    {/if}
                {/if}
            </div>
        </div>    
        <div class="jfmod-bot"></div>
    </div>
</div>
