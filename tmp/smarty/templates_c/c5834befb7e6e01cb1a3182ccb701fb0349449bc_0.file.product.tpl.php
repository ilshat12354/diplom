<?php
/* Smarty version 4.1.0, created on 2022-05-29 20:41:54
  from 'C:\xampp\htdocs\volleyshop.local\views\texturia\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6293be72ecfdd1_98388039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5834befb7e6e01cb1a3182ccb701fb0349449bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\texturia\\product.tpl',
      1 => 1653849713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6293be72ecfdd1_98388039 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="jf-content">
    <div id="image_detail" class="gallery">
        <div>
            <h3 id="jg_photo_title" class="jg_imgtitle">
                <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>

            </h3>
        </div>
        
        <div style="text-align: center;" class="jg_dtl_photo" id="jg_dtl_photo">
            <img width="675" id="jg_photo_big" class="jg_photo" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
"/>
        </div>
        
        <div class="jg_photo_details" style="font-size: 20px; padding-top: 20px;">
            <div class="jg_details">
                <div class="sectiontableentry2">
                    <div class="jg_photo_left">
                        Стоимость
                    </div>
                    <div id="jg_photo_date" class="jg_photo_right">
                        <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

                    </div>
                </div>
            </div>
            <div class="jg_detail_navi" style="padding-top: 8px;">
                <div class="jg_iconbar">
                    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> style="display: none" <?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> style="display: none" <?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>   
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>  
            
        <div class="jg_photo_description">
            <div id="jg_photo_description_label">
                Описание
            </div>
            <div class="jg_photo_des">
                <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
            </div>
        </div>
        <div class="sectiontableheader">
            &nbsp;
        </div> 
    </div>
</div><?php }
}
