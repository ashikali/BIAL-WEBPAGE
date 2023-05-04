<?php
/* Smarty version 3.1.47, created on 2023-03-06 12:48:30
  from '/var/www/html/modules/qr_batch/themes/default/qrbatch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_640593c6a08098_85337971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728a9cc93a44f3a17a083a8a7a3e0969bdcea051' => 
    array (
      0 => '/var/www/html/modules/qr_batch/themes/default/qrbatch.tpl',
      1 => 1674451780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640593c6a08098_85337971 (Smarty_Internal_Template $_smarty_tpl) {
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

<form  method='POST' enctype='multipart/form-data' style='margin-bottom:0;' action='?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
'>

<form method='POST' action='?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
'>
<input type=hidden name=action value=qrlist>

<div class='container-fluid'>
<div class='row'>
<div class='panel panel-blue'>
<div class='row'>
  <div class='p0 col-md-12'>
      <h3><?php echo $_smarty_tpl->tpl_vars['QRCODE_GENERATOR']->value;?>
</h3>
  </div>
</div>

<div class='row'>
  <div class='p0 col-md-4'>
    <?php echo $_smarty_tpl->tpl_vars['BRAND']->value;?>

  </div>
  <div class='p0 col-md-8'>
    <select name=template id=template class='selectpicker'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
      <option value='<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div>

<div class='row p0'>
  <div class='p0 col-md-4'>
    <?php echo $_smarty_tpl->tpl_vars['ISSABEL_HOST_IP']->value;?>

  </div>
  <div class='p0 col-md-8'>
    <select name=asteriskip data-container="body" id=asteriskip class='selectpickeradd' >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_IP']->value, 'ip');
$_smarty_tpl->tpl_vars['ip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ip']->value) {
$_smarty_tpl->tpl_vars['ip']->do_else = false;
?>
      <option value='<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <select>
  </div>
</div>
<div class='row p0'>
  <div class='p0 col-md-12'>
      <input type=submit class='btn btn-primary' name=generate value='<?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>
'</input>
  </div>
</div>

</div>
</div>
</div>

</form>
<?php }
}
