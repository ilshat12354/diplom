<?php
/* Smarty version 4.1.0, created on 2023-05-09 03:03:04
  from 'C:\xampp\htdocs\volleyshop.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64599bc8857e78_78006146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08fb4fadff277381b61e808354cf4c0f5012c7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\header.tpl',
      1 => 1683594183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navigation.tpl' => 1,
  ),
),false)) {
function content_64599bc8857e78_78006146 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Inter:regular,500,600&display=swap&subset=cyrillic-ext" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/Header.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/Cart.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/Profile.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/TovarCard.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/TovarList.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/Login.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/Reg.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/Footer.css" type="text/css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>
    
    <body>
        <div class="wrapper">
            <hr>
                <header id="header" class="header">
                    <div class="header__container-top _container">
                        <div class="header__logo">
                            <img class="header__logo_png" src="/images/img/icon_header.png" alt="Логотип"/>
                            <a href="/views/default/index.tpl" class="header__logo_text">CourseArt</a>
                        </div>
                        <div class="header__search">
                            <input type="text" id="search" class="header__logo_png" name="Поиск" placeholder="Поиск"/>
                            <div class="header_search-button">
                                <a href="##" class="header_search-button_link">
                                    <img src="/images/img/search.png" alt="Поиск">
                                </a>
                            </div>
                        </div>
                        <div class="header__buttons">
                            <div class="header__buttons-courses">
                                <a href="/cart/" title="Перейти в корзину" class="cart_link_courses">
                                    <img src="/images/img/icon_courses.png" alt="Курсы">
                                    <span class="cart">Мои курсы</span>
                                </a>
                            </div>
                            <div class="header__buttons-cart">
                                <a href="/cart/" title="Перейти в корзину" class="cart_link">
                                    <img src="/images/img/cart.png" alt="Корзина">
                                    <span class="cart">Корзина</span>
                                    <span id="cartCntItems" class="count__cart">
                                        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>0<?php }?>
                                    </span>
                                </a>
                            </div>
                            <div class="header__buttons-profile">
                                <a href="/login/" title="Перейти в профиль" class="profile_link">
                                    <img src="/images/img/Profile.png" alt="Профиль">
                                </a>
                            </div>
                        </div>
                    </div>
                </header>

    <?php $_smarty_tpl->_subTemplateRender('file:navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <main class="page"><?php }
}
