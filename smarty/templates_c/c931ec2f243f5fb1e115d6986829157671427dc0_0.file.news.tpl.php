<?php
/* Smarty version 4.2.0, created on 2023-03-10 01:39:41
  from 'C:\xampp\htdocs\Projekte\KinderNews\smarty\templates\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640a7c4d0cb6c8_36531819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c931ec2f243f5fb1e115d6986829157671427dc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekte\\KinderNews\\smarty\\templates\\news.tpl',
      1 => 1678407927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_640a7c4d0cb6c8_36531819 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>

<head>
    <title>News</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link href="css/news.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="d-flex flex-column mb-3">
        <div class="p-4">
            <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="p-2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
                <div><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    </div>




    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/navbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/news.js"><?php echo '</script'; ?>
>


</body>




</html><?php }
}
