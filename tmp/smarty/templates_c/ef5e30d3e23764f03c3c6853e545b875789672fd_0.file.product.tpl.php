<?php
/* Smarty version 4.1.0, created on 2023-02-19 23:56:27
  from 'C:\xampp\htdocs\volleyshop.local\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63f2a91b601a45_13865120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5e30d3e23764f03c3c6853e545b875789672fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\product.tpl',
      1 => 1676847383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f2a91b601a45_13865120 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page__main-block main-block">
    <div class="main-block__container _container">
        <div class="main-block__container_tovar__container">
            <div class="main-block__container_tovar">
                <div class="main-block__container_tovar_photo">
                    <a class="main-block__container_tovar_photo_link">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="Товар">
                    </a>
                </div>
                <div class="main-block__container_tovar_characterisiki">
                    <span class="main-block__container_tovar_characterisiki_name"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</span>
                    <span class="main-block__container_tovar_characterisiki_cost">Стоимость</span>
                    <span class="main-block__container_tovar_characterisiki_price"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 руб.</span>
                    <div class="main-block__container_tovar_button">
                        <span class="main-block__container_tovar_button_link">
                            <a href="##" id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">В корзину</a> 
                            <a href="##" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="main-block__container_description">
                <div class="main-block__container_description_container">
                    <div class="main-block__container_description_header">
                        <span>Описание</span>
                    </div>
                    <div class="main-block__container_description_body">
                        <span><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
