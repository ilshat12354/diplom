<?php
/* Smarty version 4.1.0, created on 2022-06-08 10:18:30
  from 'C:\xampp\htdocs\volleyshop.local\views\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a05b56c872a7_89260032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50309706ccb1da9e832c867233b01f62e423c56c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\admin\\admin.tpl',
      1 => 1654675968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a05b56c872a7_89260032 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blockNewCategory">
    Новая категория:
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    <br />
    
    Является подкатегория для
    <select name="generalCatId">
        <option value="0">Главная Категория
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <br />
    <input type="button" onclick="newCategory();" value="Добавить категорию"/>
</div>
<?php }
}
