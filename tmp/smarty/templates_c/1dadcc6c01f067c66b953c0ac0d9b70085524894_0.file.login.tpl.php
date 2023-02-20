<?php
/* Smarty version 4.1.0, created on 2023-02-19 22:57:09
  from 'C:\xampp\htdocs\volleyshop.local\views\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63f29b35b413b0_89252706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dadcc6c01f067c66b953c0ac0d9b70085524894' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\login.tpl',
      1 => 1676843828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f29b35b413b0_89252706 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
    
    <div class="page__main-block main-block">
        <div class="_container">
            <div class="main-block__title">
                <span>Ваши регистрационные данные</span>
            </div>
            <form action="">
                <table class="main-block_profile_table">
                    <tr>
                        <td>Логин (email)</td>
                        <td class="main-block_profile_table_td"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
                    </tr>
                    <tr> 
                        <td>Имя</td>
                        <td class="main-block_profile_table_td"><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td class="main-block_profile_table_td"><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Адрес</td>
                        <td class="main-block_profile_table_td"><textarea id="newAdress" class="main-block__textarea"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
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
            <?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
                <div class="main-block__title">
                    <span>Нет заказов</span>
                </div>
            <?php } else { ?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>
                        <tr class="main-block__orders_body_table">
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>
</td>
                            <td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;" >Показать товар заказа</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                        </tr>
                        <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
                            <td colspan="7">
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                                    <table class="main-block__orders_table_sub">
                                        <tr class="main-block__orders_header_table">
                                            <th>№</th>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Цена</th>
                                            <th>Количество</th>
                                        </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                                                <tr class="main-block__orders_body_table">
                                                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                                                    <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                <?php }?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php }?>
        </div>
    </div>

    <?php } else { ?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['hideLoginBox']->value))) {?>
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
    <?php }
}
}
}
