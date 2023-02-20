<html>
    <head>
        <title>{$pageTitle}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Inter:regular,500,600&display=swap&subset=cyrillic-ext" rel="stylesheet" />
        <link rel="stylesheet" href="{$templateWebPath}css/Header.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/Cart.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/Profile.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/TovarCard.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/TovarList.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/Login.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/Reg.css" type="text/css"/>
        <link rel="stylesheet" href="{$templateWebPath}css/Footer.css" type="text/css"/>
        <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    
    <body>
        <div class="wrapper">
            <hr>
                <header id="header" class="header">
                    <div class="header__container-top _container">
                        <div class="header__logo">
                            <img class="header__logo_png" src="/images/img/icon_header.png" alt="Логотип"/>
                            <a href="/views/default/index.tpl" class="header__logo_text">VolleyShop</a>
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
                            <div class="header__buttons-cart">
                                <a href="/cart/" title="Перейти в корзину" class="cart_link">
                                    <img src="/images/img/cart.png" alt="Корзина">
                                    <span class="cart">Корзина</span>
                                    <span id="cartCntItems" class="count__cart">
                                        {if $cartCntItems > 0}{$cartCntItems}{else}0{/if}
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

    {include file='leftcolumn.tpl'}

   <main class="page">