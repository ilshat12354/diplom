<?php
/* Smarty version 4.1.0, created on 2023-02-19 22:21:04
  from 'C:\xampp\htdocs\volleyshop.local\views\default\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63f292c09be5e5_50318758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f14488883208c09acef9d9e765377d8fb16fcfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\order.tpl',
      1 => 1676841660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f292c09be5e5_50318758 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                <tr class="main-block__cart_body_table">
                    <td><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</span></td>
                    <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br /></td>
                    <td><span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
</span></td>
                    <td><span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                    <td><span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
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

            <div class="main_block__info">
                <span class="main-block__cart_info_text">Данные заказчика</span>
            </div>
            <div id="orderUserInfoBox">
                <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['arUser']->value['name']);?>
                <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['arUser']->value['phone']);?>
                <?php $_smarty_tpl->_assignInScope('adress', $_smarty_tpl->tpl_vars['arUser']->value['adress']);?>
                
                <table class="main-block_profile_table_order">
                    <tr> 
                        <td>Имя</td>
                        <td class="main-block_profile_table_td_order"><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td class="main-block_profile_table_td_order"><input type="text" id="phone"  name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="main-block_profile_table_button"/></td>
                    </tr>
                    <tr>
                        <td>Адрес</td>
                        <td class="main-block_profile_table_td_order"><textarea id="adress" name="adress" class="main-block__textarea"><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea></td>
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
            
            
        


<?php }
}
