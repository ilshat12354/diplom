<?php
/* Smarty version 4.1.0, created on 2023-05-08 23:58:09
  from 'C:\xampp\htdocs\volleyshop.local\views\default\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64597071569004_52109083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437ea93012e1103a8164079d349c69f2fe32f7b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\cart.tpl',
      1 => 1683581949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64597071569004_52109083 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page__main-block main-block">
    <div class="_container">
        <?php if (!$_smarty_tpl->tpl_vars['rsCourses']->value) {?>
            <div class="page__main-block__fixed">
                <span class="main-block__cart_empty">В корзине пусто</span>
            </div>
        <?php } else { ?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCourses']->value, 'item', false, NULL, 'course', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr class="main-block__cart_body_table">
                    <td><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</span></td>
                    <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br /></td>
                    <td><input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="input_number" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number" value="1" min="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/></td>
                    <td><span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                    <td><span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                    <td>
                        <div class="main-block__cart_body_table_buttons__container">
                            <div class="main-block__cart_body_table_buttons">
                                <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины">Удалить</a>
                                <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент">Восстановить</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <div class="main-block__cart_body_table_buttonCheckout">
                <input <?php if (!(isset($_smarty_tpl->tpl_vars['arUser']->value))) {?> type="button" onclick="autorizeErrorMessage();" <?php } else { ?> type="submit" <?php }?> value="Оформить заказ"/>                               
            </div>
        </form>	
        <?php }?>
    </div>
</div><?php }
}
