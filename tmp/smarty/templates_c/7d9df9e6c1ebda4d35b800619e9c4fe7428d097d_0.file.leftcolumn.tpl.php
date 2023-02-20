<?php
/* Smarty version 4.1.0, created on 2023-02-19 01:06:55
  from 'C:\xampp\htdocs\volleyshop.local\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63f1681f1abd07_97050729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9df9e6c1ebda4d35b800619e9c4fe7428d097d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\default\\leftcolumn.tpl',
      1 => 1676765205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f1681f1abd07_97050729 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="_header">
    <div class="_header__container-down _container">
        <div class="_header__container-down_categories"> 
            <nav class="header__container-down_categories_dropmenu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <ul>
                    <li>
                        <a href = "/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                                <li><a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php }?> 
                    </li>
                </ul>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </nav>
        </div>
        <div class="_header__container-down_links">
            <a href="##" class="_header__liks-contacts">Контакты:</a>
            <a href="##" class="_header__links-number">(808) 555-0111</a>
        </div>
    </div>
</header>

<?php }
}
