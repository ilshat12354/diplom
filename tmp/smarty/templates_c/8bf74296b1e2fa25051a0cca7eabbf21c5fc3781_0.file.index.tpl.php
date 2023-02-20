<?php
/* Smarty version 4.1.0, created on 2022-05-29 21:13:56
  from 'C:\xampp\htdocs\volleyshop.local\views\texturia\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6293c5f476c0b3_61077169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf74296b1e2fa25051a0cca7eabbf21c5fc3781' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\texturia\\index.tpl',
      1 => 1653851634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6293c5f476c0b3_61077169 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="joomcat">
    <div class="joomcat65_row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <div style="width: 216px !important; margin-right: 10px;" class="joomcat65_imgct">
                <div class="joomcat65_img cat_img">
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"/>
                    </a>
                </div>
                    
                <div style="padding-bottom: 10px; padding-top: 10px;" class="joomcat65_txt">
                    <ul>
                        <li><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    </ul>
                </div>
            </div>
                    
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
                <div class="joomcat65_clr"></div>       
    </div>
                <div class="joomcat65_row">
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
</div>
<?php }
}
