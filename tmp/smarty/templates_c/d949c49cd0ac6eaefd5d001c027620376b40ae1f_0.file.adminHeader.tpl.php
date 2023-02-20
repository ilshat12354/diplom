<?php
/* Smarty version 4.1.0, created on 2022-05-07 00:45:50
  from 'C:\xampp\htdocs\volleyshop.local\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6275a51e13d004_05023455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd949c49cd0ac6eaefd5d001c027620376b40ae1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\admin\\adminHeader.tpl',
      1 => 1651877148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminLeftcolumn.tpl' => 1,
  ),
),false)) {
function content_6275a51e13d004_05023455 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/admin.js"><?php echo '</script'; ?>
>
    </head>
    
    <body>
        <div id="header">
            <h1>Страница Администратора</h1>
        </div>
    <?php $_smarty_tpl->_subTemplateRender('file:adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<div id="centerColumn">
<?php }
}
