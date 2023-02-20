<?php
/* Smarty version 4.1.0, created on 2023-02-20 01:13:33
  from 'C:\xampp\htdocs\volleyshop.local\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63f2bb2db4e209_52465251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a76e9eefa0f91e492b5407f75b5670fbad4374b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\index.tpl',
      1 => 1676852009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f2bb2db4e209_52465251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page__main-block main-block">
    <div class="main-block__container _container">
        <div class="grid_main_page">
            <div class="grid__body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <div id="grid__item0" class="grid__item">
                    <div class="location">
                        <div class="image">
                            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="150" />
                            </a>
                        </div>
                        <div class="info">
                            <div class="info__name_and_cost">
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="info__name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="info__cost"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</a>
                            </div>
                            <div id="color_change" class="info__button_cart">
                                <a href="##" class="cart_button" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt="Добавить в корзину"><img src="/images/img/cart_poducts.png" alt="Корзина"></a> 
                                <a href="##" class="cart_button" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt="Удалить из корзины"><img src="/images/img/cart_poducts.png" alt="Корзина"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div><?php }
}
