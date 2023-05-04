<?php
/* Smarty version 3.1.47, created on 2023-02-24 18:02:53
  from '/var/www/html/modules/dashboard/applets/Calendar/tpl/calendar_events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f8ae75331fb4_72560593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16150ebc0830cc8c6b2a4b0ef26d00c0593fa417' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/Calendar/tpl/calendar_events.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f8ae75331fb4_72560593 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EVENTOS_DIAS']->value, 'evento');
$_smarty_tpl->tpl_vars['evento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['evento']->value) {
$_smarty_tpl->tpl_vars['evento']->do_else = false;
?>
<a href='?menu=calendar&amp;action=display&amp;id=<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
&amp;event_date=<?php echo $_smarty_tpl->tpl_vars['evento']->value['dateshort'];?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['evento']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['tag_date']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['evento']->value['date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tag_call']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['evento']->value['call'];?>
<br/>
<?php
}
if ($_smarty_tpl->tpl_vars['evento']->do_else) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['NO_EVENTOS']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
