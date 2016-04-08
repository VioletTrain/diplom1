<?php
/* Smarty version 3.1.29, created on 2016-03-13 13:44:24
  from "D:\Stuff\Diplom\xampp1\htdocs\noteholder.local\views\default\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e55298e2f1c8_03464697',
  'file_dependency' => 
  array (
    '37b88b8647efa4fdb0342c08aef5a8d4a9cd2a63' => 
    array (
      0 => 'D:\\Stuff\\Diplom\\xampp1\\htdocs\\noteholder.local\\views\\default\\register.tpl',
      1 => 1457869449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e55298e2f1c8_03464697 ($_smarty_tpl) {
?>
<!doctype html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.12.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="registerBox">
            Enter email:<br />
            <input type="text" id="email" name="email" value=""/><br/>
            Enter password:<br />
            <input type="password" id="pwd1" name="pwd1" value=""/><br/>
            Enter name:<br />
            <input type="password" id="pwd2" name="pwd2" value=""/><br/>
            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
         </div>
    </body>
</html>
<?php }
}
