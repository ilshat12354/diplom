<?php
/* Smarty version 4.1.0, created on 2022-05-27 23:28:41
  from 'C:\xampp\htdocs\volleyshop.local\views\texturia\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62914289adbc58_46698300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb6c291cb37dd77172f190dd823f79dd713f7a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\texturia\\leftcolumn.tpl',
      1 => 1653686918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62914289adbc58_46698300 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="jf-right">
    <div class="jfmod module" id="Mod52">
        <div class="jfmod-top"></div>
        <div class="jfmod-mid">
            <h3>Меню: </h3>
            <div class="jfmod-content">
                <ul class="menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <li class="item44">
                            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span></a>
                        </li>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                            <ul class="menu" style="padding: 0px 0px 10px 20px;">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                                    <li class="item44">
                                        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><span><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</span></a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
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
                
                <?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
                    <div id="userBox">
                        <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>
                <?php } else { ?>
                    <div id="userBox" style="display: none" >
                        <a href="#" id="userLink"></a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['hideLoginBox']->value))) {?>
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
                    <?php }?>
                <?php }?>
            </div>
        </div>    
        <div class="jfmod-bot"></div>
    </div>
</div>
<?php }
}
