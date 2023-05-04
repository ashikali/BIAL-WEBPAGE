<?php
/* Smarty version 3.1.47, created on 2023-03-06 12:48:39
  from '/var/www/html/modules/qr_batch/themes/default/qrlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_640593cf794fe4_85909376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b31ef30898ab3e378825f20622c453ad4a96d5' => 
    array (
      0 => '/var/www/html/modules/qr_batch/themes/default/qrlist.tpl',
      1 => 1674451780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640593cf794fe4_85909376 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
var lang={};
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    lang["<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"]="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
";
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name', false, 'extension');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
    <b><?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
</b>: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br/>
    <img src='data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['codes']->value[$_smarty_tpl->tpl_vars['extension']->value];?>
' alt='qrcode' />
    <hr/>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<form method=post>
<input type=hidden name=action value=form>
<input type=submit class='btn btn-primary' name=close value='<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
'</input>
</form>
<?php }
}
