<?php
/* Smarty version 3.1.47, created on 2023-02-02 15:48:25
  from '/var/www/html/modules/reports_break/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63db8df13a4e26_02015243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f10eed03a43282e5d87061d5c9c0805895dc91' => 
    array (
      0 => '/var/www/html/modules/reports_break/themes/default/filter.tpl',
      1 => 1674451780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63db8df13a4e26_02015243 (Smarty_Internal_Template $_smarty_tpl) {
?>  <table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr class="letra12">
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['txt_fecha_init']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['txt_fecha_init']->value['INPUT'];?>
</td>
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['txt_fecha_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['txt_fecha_end']->value['INPUT'];?>
</td>
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['agent']->value['LABEL'];?>
: </td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['agent']->value['INPUT'];?>
</td>
        <td width="8%" align="center">
            <input class="button" type="submit" name="submit_fecha" value="<?php echo $_smarty_tpl->tpl_vars['btn_consultar']->value;?>
" >
        </td>
      </tr>
   </table>
<?php }
}
