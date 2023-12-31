<?php
/* Smarty version 4.3.1, created on 2023-06-18 18:36:45
  from 'C:\xampp\htdocs\Projekte\KinderNews\smarty\templates\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648f329d4ec553_89909205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c931ec2f243f5fb1e115d6986829157671427dc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekte\\KinderNews\\smarty\\templates\\news.tpl',
      1 => 1687106205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_648f329d4ec553_89909205 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>

<head>
    <title>KinderNews</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Für iphones. Sonnst ist über der Navbar der Hintergrund Rot. -->
    <meta name="theme-color" content="#2e2c2a" />
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/alle.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link href="css/news.css?v=1.4" rel="stylesheet" type="text/css">

</head>

<body>


    <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['errors']->value)) && !(isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <div class="alert alert-hidden">leer</div>
    <?php }?>

    <?php if (((isset($_smarty_tpl->tpl_vars['errors']->value)))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <?php if (($_smarty_tpl->tpl_vars['error']->value != false)) {?>
                <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
            <div class="alert alert-custom"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <div class="custom row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-4 mt-1 pb-4">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
            <div class="col">
                <a href=" ./?news&id=<?php echo $_smarty_tpl->tpl_vars['article']->value["id"];?>
">
                    <div class="card border-0 h-100 ">
                        <?php if ($_smarty_tpl->tpl_vars['article']->value["bild_url"] == "error") {?>
                            <img class="bilder rounded-top" src='img/empty.svg' class="card-img-top" alt="">
                        <?php } else { ?>
                            <img class="bilder rounded-top" src=<?php echo $_smarty_tpl->tpl_vars['article']->value["bild_url"];?>
 class="card-img-top" alt=""
                                onerror="this.src='img/empty.svg'">
                        <?php }?>
                        <div class="card-body d-flex flex-column">
                            <div class="card-title d-flex justify-content-between">
                                <p class="card-head">
                                    <?php echo $_smarty_tpl->tpl_vars['article']->value["quelle"];?>

                                </p>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['article']->value["likes"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 0) {?>
                                    <div class="heartandlikes d-flex align-items-center">
                                        <div class="likes fs-4"><?php echo $_smarty_tpl->tpl_vars['article']->value["likes"];?>
</div>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['article']->value["liked"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == true) {?>
                                            <img class="heart1" src="./img/heart2.png"></img>
                                        <?php } else { ?>
                                            <img class="heart3" src="./img/heart3.png"></img>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['article']->value["uebersetzter_titel"];?>
</h5>
                            <p class="card-preview mt-auto mb-auto"><?php echo $_smarty_tpl->tpl_vars['article']->value["uebersetzte_preview"];?>
</p>
                            <p class="card-foot"><?php echo $_smarty_tpl->tpl_vars['article']->value["date"];?>
</p>
                        </div>
                    </div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
 src="js/navbar.js?v=1.0"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/news.js"><?php echo '</script'; ?>
>


</body>




</html><?php }
}
